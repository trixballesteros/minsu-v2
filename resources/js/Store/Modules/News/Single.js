import axios from "axios"
import { runToast } from "@/Utils/notification";


function initialState() {
    return {
        item: {
            title: null,
            description: null,
            content: null,
            date: null,
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
            axios.post(route('api.news.store'), params)
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
            axios.post(route('api.news.update', state.item.id),params)
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
    setTitle({commit}, value)
    {
        commit('setTitle', value)
    },
    setDescription({commit}, value)
    {
        commit('setDescription', value)
    },
    setContent({commit}, value)
    {
        commit('setContent', value)
    },
    setDate({commit}, value)
    {
        commit('setDate', value)
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
    setTitle(state, value){
        state.item.title = value
        state.formErrors.title = null
    },
    setDescription(state, value){
        state.item.description = value
        state.formErrors.description = null
    },
    setContent(state, value){
        state.item.content = value
        state.formErrors.content = null
    },
    setDate(state, value){
        state.item.date = value
        state.formErrors.date = null
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
