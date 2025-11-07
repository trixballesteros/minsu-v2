<template>
    <app-layout>
        <div class="container-fluid">
            <div class="content">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 d-inline-block mb-0">Philgeps</h6>
                        <nav
                            aria-label="breadcrumb"
                            class="d-none d-md-inline-block ml-md-4"
                        ></nav>
                    </div>
                </div>
                <form @submit.prevent="submit">
                    <modal v-model:show="modals.transparency">
                        <div class="text-left">
                            <base-input
                                label="Name"
                                name="name"
                                placeholder="Enter  name"
                                :model-value="item.name"
                                :error="formErrors.name"
                                @update:model-value="setName($event)"
                            >
                            </base-input>
                            <base-input
                                label="File"
                                name="file"
                                :error="formErrors.files"
                            >
                                <file-input
                                    :model-value="item.files"
                                    clearable
                                    ref="fileInput"
                                    @change="setPhilgepsFile($event)"
                                />
                            </base-input>
                        </div>
                        <template v-slot:footer>
                            <div v-if="!modals.isViewDetails">
                                <base-button
                                    type="secondary"
                                    @click="modals.transparency = false"
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
                <div>
                    <div class="card">
                        <div style="min-width: 400px" class="card-body">
                            <div class="card-text">
                                <ol style="list-style-type: none">
                                    <li v-for="data in tableData">
                                        <span class="mr-2"><i class="fas fa-folder"></i></span>{{ data.name }}
                                        <el-button title="Add Node" @click="add_node(data.id)" type="text"
                                                   icon="el-icon-plus"></el-button>
                                        <el-button title="Edit Node" @click="showModal(data,'Update',true)" type="text"
                                                   icon="el-icon-edit"></el-button>
                                        <el-button title="Delete Node" @click="handleDelete(data)" type="text"
                                                   icon="el-icon-delete"></el-button>
                                        <ul style="list-style-type: none">
                                            <li v-for="subData in data.children">
                                                <span class="mr-2"><i
                                                    :class="subData.file_url ? 'fas fa-file' : 'fas fa-folder'"></i></span>
                                                <a v-if="subData.file_url" target="_blank"
                                                   :href="subData.file_url">{{ subData.name }}</a>
                                                <span v-else>{{ subData.name }}</span>
                                                <el-button class="ml-2" v-show="!subData.file_url" title="Add Node"
                                                           @click="add_node(subData.id)" type="text"
                                                           icon="el-icon-plus"></el-button>
                                                <el-button title="Edit Node" @click="showModal(subData,'Update',true)"
                                                           type="text" icon="el-icon-edit"></el-button>
                                                <el-button title="Delete Node" @click="handleDelete(subData)"
                                                           type="text" icon="el-icon-delete"></el-button>
                                                <ul style="list-style-type: none">
                                                    <li v-for="subData in subData.children">
                                                        <span class="mr-2"><i
                                                            :class="subData.file_url ? 'fas fa-file' : 'fas fa-folder'"></i></span>
                                                        <a v-if="subData.file_url" target="_blank"
                                                           :href="subData.file_url">{{ subData.name }}</a>
                                                        <span v-else>{{ subData.name }}</span>
                                                        <el-button class="ml-2" v-show="!subData.file_url"
                                                                   title="Add Node" @click="add_node(subData.id)"
                                                                   type="text" icon="el-icon-plus"></el-button>
                                                        <el-button title="Edit Node"
                                                                   @click="showModal(subData,'Update',true)" type="text"
                                                                   icon="el-icon-edit"></el-button>
                                                        <el-button title="Delete Node" @click="handleDelete(subData)"
                                                                   type="text" icon="el-icon-delete"></el-button>
                                                        <ul style="list-style-type: none">
                                                            <li v-for="subData in subData.children">
                                                                <span class="mr-2"><i
                                                                    :class="subData.file_url ? 'fas fa-file' : 'fas fa-folder'"></i></span>
                                                                <a v-if="subData.file_url" target="_blank"
                                                                   :href="subData.file_url">{{ subData.name }}</a>
                                                                <span v-else>{{ subData.name }}</span>
                                                                <el-button class="ml-2" v-show="!subData.file_url"
                                                                           title="Add Node"
                                                                           @click="add_node(subData.id)" type="text"
                                                                           icon="el-icon-plus"></el-button>
                                                                <el-button title="Edit Node"
                                                                           @click="showModal(subData,'Update',true)"
                                                                           type="text" icon="el-icon-edit"></el-button>
                                                                <el-button title="Delete Node"
                                                                           @click="handleDelete(subData)" type="text"
                                                                           icon="el-icon-delete"></el-button>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mr-2"><i class="fas fa-folder"></i></span>
                                        <el-button title="Add Node" @click="showModal({},'Add',false)" size="mini"
                                                   icon="el-icon-plus">New Folder
                                        </el-button>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>
import {mapGetters, mapActions} from "vuex";
import AppLayout from "@/Layouts/AdministratorLayout";
import swal from "sweetalert2";
import {
    ElTable,
    ElTableColumn,
    ElSelect,
    ElOption,
    ElButton,
    ElButtonGroup,
    ElInput,
    ElDropdownMenu,
    ElDropdownItem,
    ElDropdown,
    ElSwitch,
} from "element-plus";
import BasePagination from "@/Argon/components/BasePagination";
import Modal from "@/Argon/components/Modal";
import ImageUpload from "../../../Components/ImageUpload";
import FileInput from "../../../Argon/components/Inputs/FileInput";

export default {
    components: {
        FileInput,
        ImageUpload,
        BasePagination,
        Modal,
        [ElSelect.name]: ElSelect,
        [ElButton.name]: ElButton,
        [ElButtonGroup.name]: ElButtonGroup,
        [ElOption.name]: ElOption,
        [ElSwitch.name]: ElSwitch,
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
            modals: {
                isViewDetails: false,
                isUpdate: false,
                transparency: false,
                title: "New Philgeps",
            },
            transparency_tree: [],
            node_input: null,
        };
    },
    computed: {
        ...mapGetters("PhilgepsIndex", [
            "tableData",
            "pagination",
            "tableColumns",
            "serverQuery",
        ]),
        ...mapGetters("PhilgepsSingle", ["item", "formErrors"]),
    },
    unmounted: function () {
        this.resetPhilgepsState();
        this.resetState();
    },
    methods: {
        ...mapActions("PhilgepsIndex", [
            "fetchData",
            "setServerQuery",
            "destroyData",
        ]),
        ...mapActions("PhilgepsIndex", {resetPhilgepsState: "resetState"}),
        ...mapActions("PhilgepsSingle", [
            "setName",
            "setPhilgepsFile",
            "setParentId",
            "setItem",
            "storeData",
            "updateData",
            "resetState",
        ]),
        add_node(id) {
            this.showModal({}, 'Add', false);
            this.setParentId(id);
        },
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
            this.modals.transparency = true;
            this.setItem({...selectedItem});
        },
        closeModal() {
            this.modals.transparency = false;
        },
        showModal(selectedItem, title, isUpdate) {
            this.resetState();
            this.modals.isViewDetails = false;
            this.setItem({...selectedItem});
            this.modals.isUpdate = isUpdate;
            this.modals.title = title;
            this.modals.transparency = true;
        },
        async submit() {
            if (!this.modals.isUpdate) {
                await this.storeData()
                    .then((data) => {
                        this.resetState();
                        this.fetchData();
                        this.$refs.fileInput.resetInput();
                        this.modals.transparency = false;
                    })
                    .catch((error) => {
                    });
            } else {
                await this.updateData()
                    .then((data) => {
                        this.resetState()
                        this.fetchData();
                        this.$refs.fileInput.resetInput();
                        this.modals.transparency = false;
                    })
                    .catch((error) => {
                    });
            }
        },
    },

    mounted: function () {
        this.fetchData();
    },
};
</script>
<style>
.no-border-card .card-footer {
    border-top: 0;
}
</style>
