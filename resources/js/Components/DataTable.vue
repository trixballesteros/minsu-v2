<template>
    <div>
        <card
            class="no-border-card"
            body-classes="px-0 pb-1"
            footer-classes="pb-2"
        >
            <div>
                <div
                    class="col-12 d-flex justify-content-center justify-content-sm-between flex-wrap"
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
                            type="search"
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
                        v-for="column in tableColumns"
                        :key="column.label"
                        v-bind="column"
                    >
                    </el-table-column>
                    <el-table-column
                        label="Customer"
                        prop="customer"
                        min-width="240px"
                        sortable
                    >
                        <template v-slot="{ row }">
                            <a
                                :href="route('admin.customers.show', row.customer.id)"
                                tag="inertia-link"
                                class="secondary"
                                type="dark"
                                size="sm"
                                icon
                            >
                                {{row.customer.name}}
                            </a>
                        </template>
                    </el-table-column>
                    <el-table-column
                        v-if="$can('edit booking')"
                        label="Coach"
                        prop="coach"
                        min-width="240px"
                        sortable
                    >
                        <template v-slot="{ row }">
                            {{row.coach.name}}
                        </template>
                    </el-table-column>
                    <el-table-column
                        label="Location"
                        prop="location"
                        min-width="240px"
                        sortable
                    >
                        <template v-slot="{ row }">
                            {{row.location ? `${row.location.location}, ${row.location.state}`: 'Online'}}
                        </template>
                    </el-table-column>
                    <el-table-column
                        label="Link"
                        prop="link"
                        min-width="240px"
                        sortable
                        v-if="$role('Coach')"
                    >
                        <template v-slot="{ row }">
                            <a
                                v-if="row.online == 1"
                                :href="row.zoom_api_data_array.start_url"
                                tag="inertia-link"
                                class="secondary"
                                type="dark"
                                size="sm"
                                icon
                            >
                                Zoom
                            </a>
                        </template>
                    </el-table-column>
                    <el-table-column
                        label="Status"
                        prop="status"
                        min-width="240px"
                        sortable
                    >
                        <template v-slot="{ row }">
                            {{row.status}}
                        </template>
                    </el-table-column>
                </el-table>
            </div>
            <template v-slot:footer>
                <div
                    class="col-12 d-flex justify-content-center justify-content-sm-between flex-wrap"
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
</template>

<script>
import AppLayout from "@/Layouts/AdministratorLayout";
import {
    ElTable,
    ElTableColumn,
    ElSelect,
    ElOption,
    ElInput,
    ElRadioGroup,
    ElRadioButton
} from "element-plus";
import BasePagination from "@/Argon/components/BasePagination";
import Modal from "@/Argon/components/Modal";
import BaseAlert from '@/Argon/components/BaseAlert.vue'

import flatPicker from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";
export default {
name: "DataTable",
    components: {
        BasePagination,
        Modal,
        BaseAlert,
        [ElSelect.name]: ElSelect,
        [ElOption.name]: ElOption,
        [ElTable.name]: ElTable,
        [ElInput.name]: ElInput,
        [ElTableColumn.name]: ElTableColumn,
        [ElRadioButton.name]: ElRadioButton,
        [ElRadioGroup.name]: ElRadioGroup,
        AppLayout,
        flatPicker
    },
    props:[
        'serverQuery',
        'setServerQuery',
        'tableData',
        'tableColumns',
        'pagination',

    ]
}
</script>

<style scoped>

</style>
