<template>
    <app-layout>
        <div class="container-fluid">
            <div class="content">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 d-inline-block mb-0">COACH AVAILABILITY</h6>
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
                            <div class="col-lg-12">
                                <base-input
                                    name="employment_type"
                                    label="Employment Type"
                                    :error="formErrors.employment_type"
                                >
                                    <el-select
                                        :model-value="item.employment_type"
                                        reserve-keyword
                                        clearable
                                        placeholder="Select Employment Type"
                                        @update:model-value="setInput({name:'employment_type',value:$event})"
                                    >
                                        <el-option
                                            v-for="(item,index) in employmentAll"
                                            :key="index"
                                            :label="`${item}`"
                                            :value="item"
                                        >
                                        </el-option>
                                    </el-select>
                                </base-input>
                            </div>
                        </div>
                        <div v-if="item.employment_type == 'Full Time' || item.employment_type == 'Part Time'">
                            <div class="row text-center">
                                <div class="form-group col-lg-4">
                                    <label><b>Select Day</b></label>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><b>Day Start Time</b></label>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><b>Day End Time</b></label>
                                </div>
                            </div>
                            <div class="row text-center mt-2" :key="index" v-for="(availability, index) in item.availabilities">
                                <div class="col-lg-4">
                                    <button
                                        :class="['btn btn-block', availability.available ? 'btn-success': 'btn-outline-dark']"
                                        type="button"
                                        @click=" (e) =>
                                                updateAvailabilityInput({
                                                    name: 'available',
                                                    value: availability.available == 0 ? 1 : 0,
                                                    index,
                                                })"
                                    >
                                        {{ availability.day }}
                                    </button>
                                </div>
                                <div class="col-lg-4">
                                    <flat-pickr
                                        :value="availability.start_time"
                                        :config="timeConfig"
                                        :class="['form-control', availability.available ? 'available': 'not-available']"
                                        placeholder="Select Time"
                                        enableTime="true"
                                        name="start_time"
                                        @on-change="(event, string, instance) => updateAvailabilityInput({
                                            name: 'start_time',
                                            value: string,
                                            index
                                        })"
                                    />
                                </div>
                                <div class="col-lg-4">
                                    <flat-pickr
                                        :value="availability.end_time"
                                        :config="timeConfig"
                                        :class="['form-control', availability.available ? 'available': 'not-available']"
                                        placeholder="Select End Time"
                                        enableTime="true"
                                        name="end_time"
                                        @on-change="(event, string, instance) => updateAvailabilityInput({
                                            name: 'end_time',
                                            value: string,
                                            index
                                        })"
                                    />
                                    <span class="error" v-if="validationError[index]">{{ validationError[index] }}</span>
                                </div>
                            </div>
                            <base-button type="primary" native-type="submit" class="my-4">
                                Submit
                            </base-button>
                        </div>
                        <div v-if="item.employment_type == 'Casual'">

                        </div>
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
import moment from "moment";

export default {
    components: {
        AppLayout,
        [ElSelect.name]: ElSelect,
        [ElOption.name]: ElOption,
    },
    props: ["userData"],
    data: function () {
        const days = [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday",
        ];

        let availabilities = [];
        for (let day in days) {
            availabilities.push({
                day: days[day],
                start_time: null,
                end_time: null,
                available: 0,
            });
        }
        return {
            availabilities,
            validationError:[false,false,false,false,false,false,false],
            timeConfig:{
                dateFormat:'h:i K',
                noCalendar: true,
                enableTime: true,
            },
            employmentAll: ['Full Time','Part Time','Casual'],
        };
    },
    computed: {
        ...mapGetters("UserSingle", ["item", "formErrors"]),
    },
    mounted: function () {
        this.setItem(this.userData);
        if(this.userData.availabilities.length == 0) {
            this.setInput({
                    name: "availabilities",
                    value: this.availabilities,
            });
        }
    },
    unmounted: function () {
        this.resetState();
    },
    methods: {
        ...mapActions("UserSingle", [
            "resetState",
            "setItem",
            "setInput",
            "setAvailabilityInput",
            "storeAvailability"
        ]),
        updateAvailabilityInput(payload) {
            this.validationError[payload.index] = false;
            this.setAvailabilityInput(payload)
        },
        validateTime() {
            let pass = true;
            this.item.availabilities.forEach((availability,index) => {
                if(availability.available){
                    if(availability.start_time && availability.end_time) {
                        let beginningTime = moment(availability.start_time, 'h:mm A');
                        let endTime = moment(availability.end_time, 'h:mm A');
                        if(endTime.isBefore(beginningTime) || endTime.isSame(beginningTime)) {
                            this.validationError[index] = 'End time must be greater than Start time';
                            pass = false;
                            this.setAvailabilityInput({name:'end_time',value:availability.start_time,index});
                        } else {
                            this.validationError[index] = false;
                        }
                    } else {
                        pass = false;
                        this.validationError[index] = 'Start Time and End Time both are required';
                    }
                }
            });
            return pass;
        },
        async submit() {
            if(this.validateTime()) {
                await this.storeAvailability()
                    .then((data) => {
                        
                    })
                    .catch((error) => {
                        
                    });
            }
        },
    },
};
</script>
<style scoped>
.error {
  color: red;
}
.available {
    background-color: #fff !important;
}

.not-available {
    pointer-events: none;
}
</style>
