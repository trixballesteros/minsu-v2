import { createStore } from 'vuex'
// USER MODULE
import UserIndex from './Modules/User/Index'
import UserSingle from './Modules/User/Single'
import CollegeIndex from './Modules/College/Index'
import CollegeSingle from './Modules/College/Single'
import ProgramIndex from './Modules/Program/Index'
import ProgramSingle from './Modules/Program/Single'
import EventIndex from './Modules/Event/Index'
import EventSingle from './Modules/Event/Single'
import NewsIndex from './Modules/News/Index'
import NewsSingle from './Modules/News/Single'
import TransparencyIndex from './Modules/Transparencies/Index'
import TransparencySingle from './Modules/Transparencies/Single'
import DownloadablesIndex from './Modules/Downloadables/Index'
import DownloadablesSingle from './Modules/Downloadables/Single'
import PhilgepsIndex from './Modules/Philgeps/Index'
import PhilgepsSingle from './Modules/Philgeps/Single'

const store = createStore({
    modules: {
        UserIndex,
        UserSingle,
        CollegeIndex,
        CollegeSingle,
        ProgramIndex,
        ProgramSingle,
        EventIndex,
        EventSingle,
        NewsSingle,
        NewsIndex,
        TransparencySingle,
        TransparencyIndex,
        DownloadablesSingle,
        DownloadablesIndex,
        PhilgepsSingle,
        PhilgepsIndex,
    }
})
export default store;
