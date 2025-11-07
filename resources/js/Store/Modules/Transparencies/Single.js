import axios from "axios"
import { runToast } from "@/Utils/notification";


function initialState() {
    return {
        item: {
            name: '',
            parent_id: '',
            transparency_file: '',
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
            axios.post(route('api.transparency.store'), params)
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
            axios.post(route('api.transparency.update', state.item.id),params)
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
    setParentId({commit}, value)
    {
        commit('setParentId', value)
    },
    setTransparencyFile({commit}, value)
    {
        commit('setTransparencyFile', value)
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
    setParentId(state, value){
        state.item.parent_id = value
        state.formErrors.parent_id = null
    },
    setTransparencyFile(state, value){
        state.item.transparency_file =  value && value.length > 0 ? value[0] : value
        state.formErrors.transparency_file = null
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
