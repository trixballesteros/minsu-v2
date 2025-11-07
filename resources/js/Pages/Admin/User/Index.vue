<template>
	<app-layout>
		<div class="container-fluid">
			<div class="content">
				<div class="row align-items-center py-4">
					<div class="col-lg-6 col-7">
						<h6 class="h2 d-inline-block mb-0">COACHES</h6>
						<nav
							aria-label="breadcrumb"
							class="d-none d-md-inline-block ml-md-4"
						></nav>
					</div>
					<div class="col-lg-6 col-5 text-right">
						<base-button type="primary" @click="modals.import = true">
							Import Coach
						</base-button>
						<base-button
							tag="inertia-link"
							type="neutral"
							:href="route('admin.users.accounts.create')"
							aria-pressed="true"
							>New</base-button
						>
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
									label="Name"
									min-width="310px"
									prop="name"
									sortable
								>
									<template v-slot="{ row }">
										<div class="media align-items-center">
											<a href="#" class="avatar rounded-circle mr-3">
												<img
													alt="Image placeholder"
													:src="row.profile_photo_url"
												/>
											</a>
											<div class="media-body">
												<span class="font-weight-600 name mb-0 text-sm">{{
													row.name
												}}</span>
											</div>
										</div>
									</template>
								</el-table-column>
								<el-table-column
									v-for="column in tableColumns"
									:key="column.label"
									v-bind="column"
								>
								</el-table-column>
								<el-table-column min-width="200px" label="Actions">
									<template v-slot:default="props">
										<el-dropdown trigger="click" class="dropdown">
											<span class="btn btn-sm btn-icon-only text-light">
												<i class="fas fa-ellipsis-v mt-2"></i>
											</span>
											<template #dropdown>
												<el-dropdown-menu
													class="dropdown-menu dropdown-menu-arrow show"
													v-if="props.row.id"
												>
													<inertia-link
														class="dropdown-item"
														:href="
															route('admin.users.accounts.show', props.row.id)
														"
													>
														<i class="fas fa-eye mr-1"></i>
														View
													</inertia-link>
													<!-- Link -->
													<inertia-link
														class="dropdown-item"
														:href="
															route('admin.users.accounts.edit', props.row.id)
														"
													>
														<i class="fas fa-pencil-alt mr-1"></i>
														Edit
													</inertia-link>
													<inertia-link
														class="dropdown-item"
														:href="
															route('admin.users.accounts.availability', props.row.id)
														"
													>
														<i class="fas fa-clock mr-1"></i>
														Availability
													</inertia-link>
													<!-- MODAL -->
													<a
														class="dropdown-item text-danger"
														@click="handleDelete(props.$index, props.row)"
														href="#"
													>
														<i class="fas fa-trash mr-1"></i>
														Delete
													</a>
												</el-dropdown-menu>
											</template>
										</el-dropdown>
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
			<modal v-model:show="modals.import">
				<template v-slot:header>
					<h5 class="modal-title" id="exampleModalLabel">Import Coach</h5>
				</template>
				<div>
					<form ref="inputFile">
						<file-input
							ref="fileupload"
							@change="updateFileImport"
							accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
						></file-input>
						<template v-for="(error, index) in formErrors" :key="index">
							<span v-for="err in error" :key="err" class="text-danger">
								{{ err }}
							</span>
						</template>
					</form>
				</div>
				<template v-slot:footer>
					<base-button
						type="secondary"
						:disabled="loading"
						@click="handleCancel"
						>Cancel</base-button
					>
					<base-button
						type="primary"
						:disabled="loading"
						@click="handleImportData"
					>
						<i v-if="loading" class="fas fa-spinner fa-spin"></i>
						Import
					</base-button>
				</template>
			</modal>
		</div>
	</app-layout>
</template>
<script>
	import { mapGetters, mapActions } from "vuex";
	import AppLayout from "@/Layouts/AdministratorLayout";
	import swal from "sweetalert2";
	import {
		ElTable,
		ElTableColumn,
		ElSelect,
		ElOption,
		ElInput,
		ElDropdownMenu,
		ElDropdownItem,
		ElDropdown,
	} from "element-plus";
	import BasePagination from "@/Argon/components/BasePagination";
	import Modal from "@/Argon/components/Modal";
	import FileInput from "@/Argon/components/Inputs/FileInput";

	export default {
		components: {
			BasePagination,
			[ElSelect.name]: ElSelect,
			[ElOption.name]: ElOption,
			[ElTable.name]: ElTable,
			[ElInput.name]: ElInput,
			[ElTableColumn.name]: ElTableColumn,
			[ElDropdown.name]: ElDropdown,
			[ElDropdownItem.name]: ElDropdownItem,
			[ElDropdownMenu.name]: ElDropdownMenu,
			AppLayout,
			Modal,
			FileInput,
		},
		data: function () {
			return {
				modals: {
					import: false,
				},
				coachFile: [],
			};
		},
		computed: {
			...mapGetters("UserIndex", [
				"tableData",
				"pagination",
				"tableColumns",
				"perPageOptions",
				"serverQuery",
			]),
			...mapGetters("UserSingle", ["import", "formErrors", "loading"]),
		},
		methods: {
			...mapActions("UserIndex", ["fetchData", "setServerQuery", "destroyData"]),
			...mapActions("UserSingle", ["setFileImport", "importData", "resetState"]),
			async handleImportData() {
				await this.importData().then((data) => {
					this.fetchData();
					this.resetState();
					this.$refs.fileupload.resetInput();
					this.modals.import = false;
				});
			},
			handleCancel: function () {
				this.resetState();
				this.$refs.fileupload.resetInput();
				this.modals.import = false;
			},
			updateFileImport: function (event) {
				if (event.length > 0) {
					this.setFileImport(event[0]);
				}
			},
			handleEdit: function (index, value) {},
			handleDelete: function (index, row) {
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
						}
					});
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
