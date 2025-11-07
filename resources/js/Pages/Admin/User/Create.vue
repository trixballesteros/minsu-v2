<template>
    <app-layout>
        <div class="container-fluid">
            <div class="content">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 d-inline-block mb-0">ADD COACH</h6>
                        <nav
                            aria-label="breadcrumb"
                            class="d-none d-md-inline-block ml-md-4"
                        ></nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <base-button
                            tag="inertia-link"
                            type="neutral"
                            :href="route('admin.users.accounts.index')"
                            aria-pressed="true"
                        >
                            <i class="ni ni-bold-left"></i>
                            BACK
                        </base-button>
                    </div>
                </div>
                <card>
                    <form @submit.prevent="submit">
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    label="First Name"
                                    name="first_name"
                                    placeholder="Enter your first name"
                                    :model-value="item.first_name"
                                    :error="formErrors.first_name"
                                    @update:model-value="setFirstName($event)"
                                >
                                </base-input>
                            </div>
                            <div class="col-lg-6">
                                <base-input
                                    label="Last Name"
                                    name="last_name"
                                    placeholder="Enter your last name"
                                    :model-value="item.last_name"
                                    :error="formErrors.last_name"
                                    @update:model-value="setLastName($event)"
                                >
                                </base-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    label="Mobile Number"
                                    name="mobile_number"
                                    placeholder="Enter your mobile number"
                                    :model-value="item.mobile_number"
                                    :error="formErrors.mobile_number"
                                    @update:model-value="setMobileNumber($event)"
                                >
                                </base-input>
                            </div>
                            <div class="col-lg-6">
                                <base-input
                                    label="Email"
                                    name="email"
                                    type="email"
                                    placeholder="admin@example.com"
                                    :model-value="item.email"
                                    :error="formErrors.email"
                                    @update:model-value="setEmail($event)"
                                >
                                </base-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    label="Password"
                                    name="password"
                                    type="password"
                                    placeholder="Enter account password"
                                    :model-value="item.password"
                                    :error="formErrors.password"
                                    @update:model-value="setPassword($event)"
                                >
                                </base-input>
                            </div>
                            <div class="col-lg-6">
                                <base-input
                                    label="Confirm Password"
                                    name="password_confirmation"
                                    type="password"
                                    placeholder="Repeat account password"
                                    :error="formErrors.password_confirmation"
                                    :model-value="item.password_confirmation"
                                    @update:model-value="setPasswordConfirmation($event)"
                                >
                                </base-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    name="location"
                                    label="Location"
                                    :error="formErrors.location_id"
                                >
                                    <el-select
                                        :model-value="item.location_user"
                                        @update:model-value="setLocation($event)"
                                        filterable
                                        reserve-keyword
                                        multiple
                                        clearable
                                        value-key="id"
                                        placeholder="Select Location"
                                    >
                                        <el-option
                                            v-for="item in locationData"
                                            :key="item.id"
                                            :label="`${item.location}, ${item.state}`"
                                            :value="item"
                                        >
                                        </el-option>
                                    </el-select>
                                </base-input>
                            </div>
                            <div class="col-lg-6">
                                <base-input
                                    name="category"
                                    label="Coach Category"
                                    :error="formErrors.coach_category_id"
                                >
                                    <el-select
                                        :model-value="item.coach_category"
                                        @update:model-value="setCategory($event)"
                                        filterable
                                        reserve-keyword
                                        value-key="id"
                                        placeholder="Select Category"
                                    >
                                        <el-option
                                            v-for="item in coachCategoryData"
                                            :key="item"
                                            :label="item.name"
                                            :value="item"
                                        >
                                        </el-option>
                                    </el-select>
                                </base-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    label="Zoom API Key (JWT)"
                                    name="zoom_key"
                                    placeholder="Enter your zoom api key"
                                    :model-value="item.zoom_key"
                                    :error="formErrors.zoom_key"
                                    @update:model-value="setZoomKey($event)"
                                >
                                </base-input>
                            </div>
                            <div class="col-lg-6">
                                <base-input
                                    label="Zoom API Secret (JWT)"
                                    name="zoom_secret"
                                    placeholder="Enter your zoom api secrete"
                                    :model-value="item.zoom_secret"
                                    :error="formErrors.zoom_secret"
                                    @update:model-value="setZoomSecret($event)"
                                >
                                </base-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    name="segment"
                                    label="Segment"
                                    :error="formErrors.segment_id"
                                >
                                    <el-select
                                        :model-value="item.segment"
                                        @update:model-value="setSegment($event)"
                                        filterable
                                        reserve-keyword
                                        multiple
                                        clearable
                                        value-key="id"
                                        placeholder="Select Segment"
                                    >
                                        <el-option
                                            v-for="item in segmentData"
                                            :key="item.id"
                                            :label="item.name"
                                            :value="item"
                                        >
                                        </el-option>
                                    </el-select>
                                </base-input>
                            </div>
                            <div class="col-lg-6">
                                <base-input
                                    name="need_state"
                                    label="Need State"
                                    :error="formErrors.need_state_id"
                                >
                                    <el-select
                                        :model-value="item.need_state"
                                        @update:model-value="setNeedState($event)"
                                        filterable
                                        reserve-keyword
                                        multiple
                                        clearable
                                        value-key="id"
                                        placeholder="Select Need State"
                                    >
                                        <el-option
                                            v-for="item in needStateData"
                                            :key="item.id"
                                            :label="item.name"
                                            :value="item"
                                        >
                                        </el-option>
                                    </el-select>
                                </base-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <base-input
                                    name="timezone"
                                    label="Timezone"
                                    :error="formErrors.timezone"
                                >
                                    <el-select
                                        :model-value="item.timezone"
                                        @update:model-value="setTimezone($event)"
                                        filterable
                                        reserve-keyword
                                        clearable
                                        placeholder="Select timezone"
                                        autocomplete="nope"
                                    >
                                        <el-option
                                            v-for="item in timezoneData"
                                            :key="item.id"
                                            :label="item.timezone"
                                            :value="item.id"
                                        >
                                        </el-option>
                                    </el-select>
                                </base-input>
                            </div>
                            <div class="col-lg-6">

                            </div>
                        </div>
                        <base-input label="Profile Picture" name="profile_picture">
                            <ImageUpload
                                :model-value="item.profile_photo"
                                @update:model-value="setProfilePhoto($event)"
                                v-model:url="item.profile_photo_url"
                            />
                        </base-input>
                        <base-button type="primary" native-type="submit" class="my-4"
                        >Submit
                        </base-button
                        >
                    </form>
                </card>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AdministratorLayout";
import {mapGetters, mapActions} from "vuex";
import {ElSelect, ElOption} from "element-plus";
import ImageUpload from "@/Components/ImageUpload";

export default {
    components: {
        AppLayout,
        [ElSelect.name]: ElSelect,
        [ElOption.name]: ElOption,
        ImageUpload,
    },
    computed: {
        ...mapGetters("UserSingle", ["item", "formErrors"]),
        // Location
        ...mapGetters("LocationIndex", {locationData: "tableData"}),
        // Segment
        ...mapGetters("SegmentIndex", {segmentData: "tableData"}),
        // Need State
        ...mapGetters("NeedStateIndex", {needStateData: "tableData"}),
        // Coach Category
        ...mapGetters("CoachCategoryIndex", {coachCategoryData: "tableData"}),

        ...mapGetters("TimezoneIndex", {timezoneData: "tableData"}),
    },
    mounted: function () {
        this.searchCoachCategory({name: "perPage", value: 5000});
        this.searchLocation({name: "perPage", value: 5000});
        this.searchSegment({name: "perPage", value: 5000});
        this.searchNeedStateState({name: "perPage", value: 5000});
        this.fetchTimezoneData();
    },
    unmounted: function () {
        this.resetState();
        this.resetLocationState();
        this.resetSegmentState();
        this.resetNeedStateState();
        this.resetCoachCategoryState();
    },
    methods: {
        ...mapActions("TimezoneIndex", {fetchTimezoneData: "fetchData"}),
        ...mapActions("UserSingle", [
            "setFirstName",
            "setLastName",
            "setMobileNumber",
            "setZoomKey",
            "setRole",
            "setEmail",
            "setPassword",
            "setPasswordConfirmation",
            "setLocation",
            "setSegment",
            "setTimezone",
            "setNeedState",
            "setCategory",
            "setProfilePhoto",
            "setZoomSecret",
            "storeData",
            "resetState",
        ]),
        // Location
        ...mapActions("LocationIndex", {searchLocation: "setServerQuery"}),
        ...mapActions("LocationIndex", {resetLocationState: "resetState"}),
        // Segment
        ...mapActions("SegmentIndex", {searchSegment: "setServerQuery"}),
        ...mapActions("SegmentIndex", {resetSegmentState: "resetState"}),
        // NeedState
        ...mapActions("NeedStateIndex", {searchNeedStateState: "setServerQuery"}),
        ...mapActions("NeedStateIndex", {resetNeedStateState: "resetState"}),
        // Category
        ...mapActions("CoachCategoryIndex", {
            searchCoachCategory: "setServerQuery",
        }),
        ...mapActions("CoachCategoryIndex", {
            resetCoachCategoryState: "resetState",
        }),
        async submit() {
            await this.storeData()
                .then((data) => {
                    this.resetState()
                    this.$inertia.get(route('admin.users.accounts.index'));
                })
                .catch((error) => {
                });
        },
    },


};
</script>
