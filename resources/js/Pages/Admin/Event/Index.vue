<template>
    <app-layout>
        <div class="container-fluid">
            <div class="content">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 d-inline-block mb-0">Events</h6>
                        <nav
                            aria-label="breadcrumb"
                            class="d-none d-md-inline-block ml-md-4"
                        ></nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <base-button type="neutral" @click="showModal({}, 'Add', false)"
                        >New
                        </base-button
                        >
                        <form @submit.prevent="submit">
                            <modal v-model:show="modals.college">
                                <template v-slot:header>
                                    <h5
                                        v-if="!modals.isViewDetails"
                                        class="modal-title"
                                        id="collegeFormModal"
                                    >
                                        {{ modals.title }} Event
                                    </h5>
                                </template>
                                <div class="text-left">
                                    <base-input
                                        label="Featured Image"
										name="image"
                                        :error="formErrors.image"
                                    >
                                        <el-radio-group
                                            :model-value="item.featured"
                                            @update:model-value="setFeatured($event)"
                                        >
                                            <el-radio-button :label="1">Yes</el-radio-button>
                                            <el-radio-button :label="0">No</el-radio-button>
                                        </el-radio-group>
                                    </base-input>
                                    <base-input
                                        label="Featured Image"
										name="image"
                                        :error="formErrors.image"
                                    >
                                        <ImageUpload
                                            label="Select image"
                                            width="100%"
                                            height="150px"
                                            :model-value="item.image"
                                            @update:model-value="setImage($event)"
                                            v-model:url="item.image_url"
                                        />
                                    </base-input>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <base-input
                                                label="From"
                                                name="date_from"
                                                :error="formErrors.date_from"
                                            >
                                                <el-date-picker
                                                    :model-value="item.date_from"
                                                    @update:model-value="setDateFrom($event)"
                                                    type="date"
                                                    value-format="YYYY-MM-DD"
                                                    placeholder="Select Date">
                                                </el-date-picker>
                                            </base-input>
                                        </div>
                                        <div class="col-md-6">
                                            <base-input
                                                label="To"
                                                name="date_to"
                                                :error="formErrors.date_to"
                                            >
                                                <el-date-picker
                                                    :model-value="item.date_to"
                                                    @update:model-value="setDateTo($event)"
                                                    type="date"
                                                    value-format="YYYY-MM-DD"
                                                    placeholder="Select Date">
                                                </el-date-picker>
                                            </base-input>
                                        </div>
                                    </div>
                                    <base-input
                                        label="Name"
                                        name="name"
                                        placeholder="Enter event  name"
                                        :model-value="item.name"
                                        :error="formErrors.name"
                                        @update:model-value="setName($event)"
                                    >
                                    </base-input>
                                    <base-input
                                        label="Description"
                                        name="description"
                                        :error="formErrors.description"
                                    >
                                        <html-editor
                                            :value="item.description"
                                            :has-image="true"
                                            height="300"
                                            placeholder="Enter description"
                                            @input="setDescription($event)"
                                        ></html-editor>
                                    </base-input>
                                </div>
                                <template v-slot:footer>
                                    <div v-if="!modals.isViewDetails">
                                        <base-button
                                            type="secondary"
                                            @click="modals.college = false"
                                        >Close
                                        </base-button
                                        >
                                        <base-button native-type="submit" type="primary">
                                            <span v-if="!modals.isUpdate">Save</span>
                                            <span v-else>Update</span>
                                        </base-button>
                                    </div>
                                </template>
                            </modal>
                        </form>
                    </div>
                </div>
                <div>
                    <card
                        class="no-border-card"
                        body-classes="px-0 pb-1"
                        footer-classes="pb-2"
                    >
                        <div>
                            <div
                                class="
									col-12
									d-flex
									justify-content-center justify-content-sm-between
									flex-wrap
								"
                            >
                                <el-select
                                    class="select-primary pagination-select"
                                    :model-value="serverQuery.perPage"
                                    @update:model-value="
										setServerQuery({ name: 'perPage', value: $event })
									"
                                    placeholder="Per page"
                                >
                                    <el-option
                                        class="select-primary"
                                        v-for="item in pagination.perPageOptions"
                                        :key="item"
                                        :label="item"
                                        :value="item"
                                    >
                                    </el-option>
                                </el-select>
                                <div>
                                    <el-input
                                        class="mb-3"
                                        clearable
                                        prefix-icon="el-icon-search"
                                        style="width: 200px"
                                        placeholder="Search records"
                                        :model-value="serverQuery.query"
                                        @update:model-value="
											setServerQuery({ name: 'query', value: $event })
										"
                                        aria-controls="datatables"
                                    >
                                    </el-input>
                                </div>
                            </div>
                            <el-table
                                :data="tableData"
                                row-key="id"
                                header-row-class-name="thead-light"
                            >
                                <el-table-column
                                    min-width="240px"
                                    prop="image_url"
                                >
                                    <template v-slot="{ row }">
                                        <img style="width: 200px; height: 100px;object-fit: cover;border-radius: 5px"
                                             :src="row.image_url" :alt="row.name">
                                    </template>
                                </el-table-column>
                                <el-table-column
                                    label="Date"
                                    prop="date"
                                    min-width="240px"
                                    sortable
                                >
                                    <template v-slot="{ row }">
                                        {{ row.date_to ? (moment(row.date_from).format("MMMM D, YYYY") + ' - ' + moment(row.date_to).format("MMMM D, YYYY")) : moment(row.date_from).format("MMMM D, YYYY") }}
                                    </template>
                                </el-table-column>
                                <el-table-column
                                    v-for="column in tableColumns"
                                    :key="column.label"
                                    v-bind="column"
                                >
                                </el-table-column>

                                <el-table-column min-width="200px" label="Actions">
                                    <template v-slot="{ row }">
                                        <button @click="showModal(row, 'Update', true)" class="btn btn-primary btn-sm">
                                            Edit
                                        </button>
                                        <button @click="handleDelete(row)" class="btn btn-danger btn-sm">Delete</button>
                                    </template>
                                </el-table-column>
                            </el-table>
                        </div>
                        <template v-slot:footer>
                            <div
                                class="
									col-12
									d-flex
									justify-content-center justify-content-sm-between
									flex-wrap
								"
                            >
                                <div class="">
                                    <p class="card-category" v-if="pagination.total > 0">
                                        Showing {{ pagination.from }} to {{ pagination.to }} of
                                        {{ pagination.total }} entries
                                    </p>
                                </div>
                                <base-pagination
                                    class="pagination-no-border"
                                    :model-value="serverQuery.page"
                                    @update:model-value="
										setServerQuery({ name: 'page', value: $event })
									"
                                    :per-page="pagination.perPage"
                                    :total="pagination.total"
                                >
                                </base-pagination>
                            </div>
                        </template>
                    </card>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>
import {mapGetters, mapActions} from "vuex";
import AppLayout from "@/Layouts/AdministratorLayout";
import swal from "sweetalert2";
import moment from "moment";

import {
    ElTable,
    ElTableColumn,
    ElSelect,
    ElOption,
    ElDatePicker,
    ElInput,
    ElRadioGroup,
    ElRadioButton,
    ElDropdownMenu,
    ElDropdownItem,
    ElDropdown,
    ElSwitch,
} from "element-plus";
import BasePagination from "@/Argon/components/BasePagination";
import Modal from "@/Argon/components/Modal";
import ImageUpload from "../../../Components/ImageUpload";
import HtmlEditor from "../../../Argon/components/Inputs/HtmlEditor";

export default {
    components: {
        HtmlEditor,
        ImageUpload,
        BasePagination,
        Modal,
        [ElDatePicker.name]: ElDatePicker,
        [ElSelect.name]: ElSelect,
        [ElOption.name]: ElOption,
        [ElSwitch.name]: ElSwitch,
        [ElRadioGroup.name]: ElRadioGroup,
        [ElRadioButton.name]: ElRadioButton,
        [ElTable.name]: ElTable,
        [ElInput.name]: ElInput,
        [ElTableColumn.name]: ElTableColumn,
        [ElDropdown.name]: ElDropdown,
        [ElDropdownItem.name]: ElDropdownItem,
        [ElDropdownMenu.name]: ElDropdownMenu,
        AppLayout,
    },
    data() {
        return {
            moment: null,
            modals: {
                isViewDetails: false,
                isUpdate: false,
                college: false,
                title: "New Event",
            },
        };
    },
    computed: {
        ...mapGetters("EventIndex", [
            "tableData",
            "pagination",
            "tableColumns",
            "serverQuery",
        ]),
        ...mapGetters("EventSingle", ["item", "formErrors"]),
    },
    unmounted: function () {
        this.resetEventState();
        this.resetState();
    },
    methods: {
        ...mapActions("EventIndex", [
            "fetchData",
            "setServerQuery",
            "destroyData",
        ]),
        ...mapActions("EventIndex", {resetEventState: "resetState"}),
        ...mapActions("EventSingle", [
            "setName",
            "setFeatured",
            "setImage",
            "setDescription",
            "setDateTo",
            "setDateFrom",
            "setImageUrl",
            "setItem",
            "storeData",
            "updateData",
            "resetState",
        ]),
        handleEdit: function (index, value) {
        },
        handleDelete: function (row) {
            const swalWithBootstrapButtons3 = swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success btn-fill",
                    cancelButton: "btn btn-danger btn-fill",
                },
                buttonsStyling: false,
            });
            swalWithBootstrapButtons3
                .fire({
                    title: "Are you sure?",
                    text: `You won't be able to revert this!`,
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                })
                .then((result) => {
                    if (result.value) {
                        this.destroyData(row.id);
                        swalWithBootstrapButtons3.fire({
                            title: "Deleted!",
                            text: `You deleted ${row.name}`,
                        });
                        this.fetchData();
                    }
                });
        },
        viewDetails(selectedItem) {
            this.modals.isViewDetails = true;
            this.modals.college = true;
            this.setItem({...selectedItem});
        },
        closeModal() {
            this.modals.college = false;
            this.resetState();
        },
        showModal(selectedItem, title, isUpdate) {
            this.resetState();
            this.modals.isViewDetails = false;
            this.setItem({...selectedItem});
            this.modals.isUpdate = isUpdate;
            this.modals.title = title;
            this.modals.college = true;
        },
        async submit() {
            if (!this.modals.isUpdate) {
                await this.storeData()
                    .then((data) => {
                        this.resetState();
                        this.fetchData();
                        this.modals.college = false;
                    })
                    .catch((error) => {
                    });
            } else {
                await this.updateData()
                    .then((data) => {
                        this.resetState()
                        this.fetchData();
                        this.modals.college = false;
                    })
                    .catch((error) => {
                    });
            }
        },
    },

    mounted: function () {
        this.fetchData();
        this.moment = moment;
    },
};
</script>
<style>
.no-border-card .card-footer {
    border-top: 0;
}
</style>
