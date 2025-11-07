import axios from "axios"
import { runToast } from "@/Utils/notification";


function initialState() {
    return {
        item: {
            name: null,
            featured: null,
            date_from: null,
            date_to: null,
            description: null,
            image: null,
            image_url: '',
        },
        formErrors: {},
        loading: false,
    }
}

const getters = {
    item: state => state.item,
    loading: state => state.loading,
    formErrors: state => state.formErrors
}

const actions = {
    storeData({ commit, state, dispatch }) {
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
        return new Promise((resolve, reject) => {
            axios.post(route('api.event.store'), params)
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
    updateData({ commit, state, dispatch }) {
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

        return new Promise((resolve, reject) => {
            axios.post(route('api.event.update', state.item.id),params)
                .then(response => {
                    runToast('top-right', 'success', "Data has been updated")
                    resolve(response)
                }).catch(error => {
                if(typeof error.response.data.errors != 'undefined')
                {
                    commit('setFormErrors', error.response.data.errors)
                    //runToast('top-right', 'warning', error.response.data.message)
                    runToast('top-right', 'warning', 'There is one or more error, please check the form and submit again.')
                }
                reject(error)
            });
        })    },
    setItem({commit}, value)
    {
        commit('setItem', value)
    },
    setName({commit}, value)
    {
        commit('setName', value)
    },
    setFeatured({commit}, value)
    {
        commit('setFeatured', value)
    },
    setDateFrom({commit}, value)
    {
        commit('setDateFrom', value)
    },
    setDateTo({commit}, value)
    {
        commit('setDateTo', value)
    },
    setDescription({commit}, value)
    {
        commit('setDescription', value)
    },
    setImage({commit}, value)
    {
        commit('setImage', value)
    },
    setImageUrl({commit}, value)
    {
        commit('setImageUrl', value)
    },
    setFormErrors({commit}, value)
    {
        commit('setFormErrors', value)
    },
    resetState({ commit }) {
        commit('resetState')
    }
}

const mutations = {
    setItem(state, value){
        state.item = value
    },
    setName(state, value){
        state.item.name = value
        state.formErrors.name = null
    },
    setFeatured(state, value){
        state.item.featured = value
        state.formErrors.featured = null
    },
    setDateFrom(state, value){
        state.item.date_from = value
        console.log(value);
        state.formErrors.date_from = null
    },
    setDateTo(state, value){
        state.item.date_to = value
        state.formErrors.date_to = null
    },
    setDescription(state, value){
        state.item.description = value
        state.formErrors.description = null
    },
    setImage(state, value){
        state.item.image = value
        state.formErrors.image = null
    },
    setImageUrl(state, value){
        state.item.image_url = value
        state.formErrors.image_url = null
    },
    setFormErrors(state, errors)
    {
        state.formErrors = errors;
    },
    setLoading(state, loading) {
        state.loading = loading
    },
    resetState(state) {
        state = Object.assign(state, initialState())
    }
}

export default {
    namespaced: true,
    state: initialState,
    getters,
    actions,
    mutations
}
