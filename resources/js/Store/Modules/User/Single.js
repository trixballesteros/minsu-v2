import axios from "axios"
import { runToast } from "@/Utils/notification";


function initialState() {
    return {
        item: {
            email: '',
            password: '',
            first_name: '',
            last_name: '',
            mobile_number: '',
            zoom_key: '',
            zoom_secret: '',
            role: 'Coach',
            password_confirmation: '',
            coach_category: null,
            coach_category_id: [],
            location_user: [],
            location_id: [],
            need_state: [],
            need_state_id: [],
            segment: [],
            segment_id: [],
            profile_photo: null,
            profile_photo_url: '',
            timezone:''
        },
        roles: ["Coach"],
        import: null,
        formErrors: {},
        loading: false,
    }
}

const getters = {
    item: state => state.item,
    loading: state => state.loading,
    roles: state => state.roles,
    import: state => state.import,
    formErrors: state => state.formErrors
}

const actions = {
    storeData({ commit, state, dispatch }) {
        commit('setFormErrors', {})

        let params = new FormData();
        params.set('_method', 'POST')
        for (let fieldName in state.item) {
            let fieldValue = state.item[fieldName];
            if (typeof fieldValue !== 'object') {
                params.set(fieldName, fieldValue);
            } else {
                if (fieldValue && typeof fieldValue[0] !== 'object') {
                    params.set(fieldName, fieldValue);
                } else {
                    for (let index in fieldValue) {
                        params.set(fieldName + '[' + index + ']', fieldValue[index]);
                    }
                }
            }
        }

        for (const index in state.item.location_user) {
            params.set(`location_id[${index}]`, state.item.location_user[index].id)
        }
        for (const index in state.item.segment) {
            params.set(`segment_id[${index}]`, state.item.segment[index].id)
        }
        for (const index in state.item.need_state) {
            params.set(`need_state_id[${index}]`, state.item.need_state[index].id)
        }
        if (state.item.profile_photo == null) {
            params.delete('profile_photo')
        }

        const config = {
            headers: {
                'content-type': 'multipart/form-data'
            }
        }

        return new Promise((resolve, reject) => {
            axios.post(route('api.users.store'), params, config)
                .then(response => {
                    runToast('top-right', 'success', "Data has been saved.")
                    resolve(response)
                }).catch(error => {
                    if(typeof error.response.data.errors != 'undefined')
                    {
                        commit('setFormErrors', error.response.data.errors)
						runToast('top-right', 'warning', error.response.data.message)
                    }
                    reject(error)
                });
        })
    },

    importData({ commit, state, dispatch }) {
        commit('setFormErrors', {})
        commit('setLoading', true);
        let params = new FormData();
        if (state.import == null) {
            params.delete('import')
        }else{
            params.set('import', state.import)
        }
        const config = {
            headers: {
                'content-type': 'multipart/form-data'
            }
        }
        return new Promise((resolve, reject) => {
            axios.post(route('api.users.import'), params, config)
                .then(response => {
                    runToast('top-right', 'success', "Data has been saved.")
                    resolve(response)
                }).catch(error => {
                    if(typeof error.response.data.errors != 'undefined')
                    {
                        commit('setFormErrors', error.response.data.errors)
						runToast('top-right', 'warning', error.response.data.message)
                    }
                    reject(error)
                })
                .finally(function(){
                    commit('setLoading', false);
                });
        })
    },
    updateData({ commit, state, dispatch }) {
        commit('setFormErrors', {})
        commit('setLoading', true);
        let params = new FormData();
        params.set('_method', 'PATCH')

        for (let fieldName in state.item) {
            let fieldValue = state.item[fieldName];
            if (typeof fieldValue !== 'object') {
                params.set(fieldName, fieldValue);
            } else {
                if (fieldValue && typeof fieldValue[0] !== 'object') {
                    params.set(fieldName, fieldValue);
                } else {
                    for (let index in fieldValue) {
                        params.set(fieldName + '[' + index + ']', fieldValue[index]);
                    }
                }
            }
        }

        for (const index in state.item.location_user) {
            params.set(`location_id[${index}]`, state.item.location_user[index].id)
        }
        for (const index in state.item.segment) {
            params.set(`segment_id[${index}]`, state.item.segment[index].id)
        }
        for (const index in state.item.need_state) {
            params.set(`need_state_id[${index}]`, state.item.need_state[index].id)
        }

        if (state.item.profile_photo == null) {
            params.delete('profile_photo')
        }

        const config = {
            headers: {
                'content-type': 'multipart/form-data'
            }
        }
        return new Promise((resolve, reject) => {
            axios.post(route('api.users.update', state.item.id), params, config)
                .then(response => {
                    runToast('top-right', 'success', "Data has been saved.")
                    resolve(response)
                }).catch(error => {
                    if (typeof error.response.data.errors != 'undefined') {
                        commit('setFormErrors', error.response.data.errors)
                        runToast('top-right', 'warning', error.response.data.message)
                    }
                    reject(error)
                })
                .finally(function(){
                    commit('setLoading', false);
                });
        })
    },
    storeAvailability({ commit, state, dispatch }) {
        commit('setFormErrors', {})
        commit('setLoading', true);
        let params = new FormData();
        params.set('employment_type',state.item.employment_type)
        state.item.availabilities.forEach((element,index) => {
            for (let fieldName in element) {
                params.set('availabilities['+index+']['+fieldName+']',state.item.availabilities[index][fieldName])
            }
        });
        return new Promise((resolve, reject) => {
            axios.post(route('api.users.availability', state.item.id), params)
                .then((response) => {
                    runToast('top-right', 'success', "Data has been saved.")
                    resolve();
                })
                .catch((error) => {
                    if(typeof error.response.data.errors != 'undefined')
                    {
                        commit('setFormErrors', error.response.data.errors)
						runToast('top-right', 'warning', error.response.data.message)
                    }

                    reject(error);
                })
                .finally(() => {
                    commit("setLoading", false);
                });
        });
    },
    setItem({commit}, value)
    {
        commit('setItem', value)
    },
    setFirstName({commit}, value)
    {
        commit('setFirstName', value)
    },
    setLastName({commit}, value)
    {
        commit('setLastName', value)
    },
    setMobileNumber({commit}, value)
    {
        commit('setMobileNumber', value)
    },
    setZoomKey({commit}, value)
    {
        commit('setZoomKey', value)
    },
    setZoomSecret({commit}, value)
    {
        commit('setZoomSecret', value)
    },
    setRole({commit}, value)
    {
        commit('setRole', value)
    },
    setEmail({commit}, value)
    {
        commit('setEmail', value)
    },
    setPassword({commit}, value)
    {
        commit('setPassword', value)
    },
    setPasswordConfirmation({commit}, value)
    {
        commit('setPasswordConfirmation', value)
    },
    setLocation({commit}, value)
    {
        commit('setLocation', value)
    },
    setSegment({commit}, value)
    {
        commit('setSegment', value)
    },
    setNeedState({commit}, value)
    {
        commit('setNeedState', value)
    },
    setCategory({commit}, value)
    {
        commit('setCategory', value)
    },
    setProfilePhoto({commit}, value)
    {
        commit('setProfilePhoto', value)
    },
    setFileImport({commit}, value)
    {
        commit('setFileImport', value)
    },
    setTimezone({commit}, value)
    {
        commit('setTimezone', value)
    },
    setFormErrors({commit}, value)
    {
        commit('setFormErrors', value)
    },
    setInput({ commit }, value) {
        commit("setInput", value);
    },
    setAvailabilityInput({ commit }, value) {
        commit("setAvailabilityInput", value);
    },
    resetState({ commit }) {
        commit('resetState')
    }
}

const mutations = {
    setItem(state, value){
        state.item = value
    },
    setTimezone(state, value){
        state.item.timezone = value
    },

    setFirstName(state, value){
        state.item.first_name = value
    },
    setLastName(state, value){
        state.item.last_name = value
    },
    setMobileNumber(state, value){
        state.item.mobile_number = value
    },
    setZoomKey(state, value){
        state.item.zoom_key = value
    },
    setZoomSecret(state, value){
        state.item.zoom_secret = value
    },
    setRole(state, value){
        state.item.role = value
    },
    setEmail(state, value){
        state.item.email = value
    },
    setPassword(state, value)
    {
        state.item.password = value
    },
    setPasswordConfirmation(state, value)
    {
        state.item.password_confirmation = value
    },
    setLocation(state, value)
    {
        state.item.location_user = value
        state.item.location_id = value.map(data => data.id);
    },
    setSegment(state, value)
    {
        state.item.segment = value
        state.item.segment_id = value.map(data => data.id);
    },
    setNeedState(state, value)
    {
        state.item.need_state = value
        state.item.need_state_id = value.map(data => data.id);
    },
    setCategory(state, value)
    {
        state.item.coach_category = value
        state.item.coach_category_id = typeof value.id != 'undefined' ? value.id : null;
    },
    setProfilePhoto(state, value){
        state.item.profile_photo = value
    },
    setFileImport(state, value){
        state.import = value
    },
    setFormErrors(state, errors)
    {
        state.formErrors = errors;
    },
    setInput(state, { name, value }) {
        state.item[name] = value;
    },
    setAvailabilityInput(state, { name, value, index }) {
        state.item.availabilities[index][name] = value;

        if (name == 'available' && value == 0){
            state.item.availabilities[index].start_time = null
            state.item.availabilities[index].end_time = null
        }
    },
    setLoading(state, loading) {
        state.loading = loading
    },
    resetState(state) {
        state = Object.assign(state, initialState())
        console.log(state);
    }
}

export default {
    namespaced: true,
    state: initialState,
    getters,
    actions,
    mutations
}
