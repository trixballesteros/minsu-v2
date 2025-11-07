import { debounce } from 'lodash'
import { runToast } from "@/Utils/notification";
function initialState() {
    return {
        tableData: [],
        serverQuery: {
            query: '',
            perPage: 10,
            page: 1,
            organisation: null,
            no_organisation: null
        },
        pagination: {
            currentPage: 0,
            total: 0,
            perPage: 0,
            from: 0,
            to: 0,
            perPageOptions: [5, 10, 25, 50],
        },
        tableColumns: [
            {
                prop: "email",
                label: "Email",
                minWidth: 250,
            },
            {
                prop: "mobile_number",
                label: "Mobile Number",
                minWidth: 200,
            },
        ],
        loading: false,
    }
}

const getters = {
    tableData: state => state.tableData,
    pagination: state => state.pagination,
    tableColumns: state => state.tableColumns,
    serverQuery: state => state.serverQuery,
    loading: state => state.loading
}

const actions = {
    fetchData({ commit, state }) {
        commit('setLoading', true);
        axios.get(route('api.users.index', state.serverQuery))
                .then(response => {
                    commit('setPagination', response.data)
                    commit('setTableData', response.data.data)
                })
                .finally(function(){
                    commit('setLoading', false);
                })
    },
    destroyData({ dispatch, commit, state }, id) {
        axios.delete(route('api.users.destroy', id))
            .then(data => {
                runToast('top-right', 'warning', "Data has been removed")
                dispatch('delayServerQuery');
            })
    },
    setServerQuery({commit, dispatch}, payload) {
        commit('setServerQuery', payload)
        dispatch('delayServerQuery');
    },
    delayServerQuery: debounce(({ dispatch }, text) => {
        dispatch("dispatchQueryString");
    }, 500),

    dispatchQueryString({ dispatch }) {
        dispatch('fetchData');
    },
    resetState({ commit }) {
        commit('resetState')
    }
}

const mutations = {
    setPagination(state, {current_page, from, per_page, total, to}){
        state.pagination.currentPage =  current_page;
        state.pagination.total = total;
        state.pagination.perPage =  parseInt(per_page);
        state.pagination.from =  from;
        state.pagination.to =  to;
    },
    setTableData(state, data)
    {
        state.tableData = data;
    },
    setQuery(state, query) {
        state.query = query
    },
    resetState(state) {
        state = Object.assign(state, initialState())
    },
    setServerQuery(state, {name, value})
    {
        state.serverQuery[name] = value
    },
    setLoading(state, status)
    {
        state.loading = status;
    }
}

export default {
    namespaced: true,
    state: initialState,
    getters,
    actions,
    mutations
}
