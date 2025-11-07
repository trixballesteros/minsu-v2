<template>
    <div>
        <Header />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h1>Programs</h1></center>
                <p>The university's program offerings, recognized by the country's Commission on Higher Education, aim to provide students with opportunities to discover their potentials and enhance their technical and creative skills in an energetic academic atmosphere.</p>
            </div>
        </div>
    </div>

    <!--    <div>-->
    <!--        <h1>Programs </h1>-->
    <!--        <p>-->
    <!--            The university's program offerings, recognized by the country's Commission on Higher Education, aim to provide students with opportunities to discover their potentials and enhance their technical and creative skills in an energetic academic atmosphere.-->
    <!--        </p>-->
    <!--        <p>-->
    <!--            Each program offering is underpinned by pragmatic, relevant, and socially responsive curricula, which equip students to compete globally by embracing transdisciplinarity, social intelligence, new media literacy, design mindset, and collaboration in both physical and virtual realms. These skills are deemed crucial for success in emerging professional and social contexts.-->
    <!--        </p>-->
    <!--        <p>-->
    <!--            Additionally, the university offers graduate programs designed to offer advanced learning in specialized disciplines. These programs not only provide professionals with opportunities for career advancement but also cultivate greater intellectual curiosity and passion for inquiry, thereby preparing them to become leaders, managers, and innovators capable of developing transformative solutions to real-world problems.-->
    <!--        </p>-->
    <!--    </div>-->
    <div >

        <section class="accordion-menu">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6" v-for="(section, index) in accordionSections" :key="index">
                        <div class="card" style="width: 100%; margin-bottom: 10px;">
                            <div class="card-body">
                                <div @click="toggleAccordion(index)" :class="{ active: section.active }" class="card-header" style="cursor: pointer; background-color: #0b5421;  font-size: 15px; color: white; display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <img height="70" width="70" :src="section.icon" />
                                    </div>
                                    <div>{{ section.title }}</div>
                                </div>
                                <div v-if="section.active" class="card-body" style="padding: 20px; color: #333;">
                                    <ul style="list-style-type: disc;">
                                        <li v-for="(item, itemIndex) in section.items" :key="itemIndex">
                                            <div @click="toggleDrawer(index, itemIndex)" style="cursor: pointer;">
                                                {{ item.title }}
                                            </div>
                                            <el-drawer
                                                v-model="item.active"
                                                direction="rtl"
                                                :with-header="false"
                                                size="30%"
                                                style="padding: 20px;"
                                            >
                                                <div v-if="item.active">
                                                    <!-- Modified content to display as bullet points -->
                                                    <div v-html="item.content"></div>
                                                </div>
                                            </el-drawer>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { ElDrawer } from 'element-plus';
import Header from "../../Layouts/Header";

export default {
    name: "Programs",
    components: { ElDrawer, Header },
    data() {
        return {
            accordionSections: [
                {
                    title: 'Graduate School',
                    icon: 'template/images/programs/gs2.png',
                    active: false,
                    items: [
                        { title: 'Doctor of Philosophy in Crop Science', content: 'Doctor of Philosophy in Crop Science content.', active: false },
                        { title: 'Doctor of Education', content: 'Doctor of Education content.', active: false },
                        { title: 'Master of Arts in Education', content: 'Master of Arts in Education content.', active: false },
                        { title: 'Master of Science in Agriculture', content: 'Master of Science in Agriculture content.', active: false },
                        { title: 'Master in Business Administration', content: 'Master in Business Administration content.', active: false },
                        {
                            title: 'Master in Public Administration',
                            content: `
                <b>GOAL</b>
                <p>
                  The MPA Program, in support to MinSU philosophy and objectives, will provide advanced training for public officials for distinguished careers in local and national government, dealing with critical public policy.
                </p>
                <ul>
                  <li>Make the graduate studies more accessible to public servants of Oriental Mindoro and nearby provinces.</li>
                  <li>Provide quality instruction on the principles, trends, thrusts, issues, strategies and approaches in public administration.</li>
                  <li>Deepen the insights and develop in the graduate student attitudes, behavior, and skills needed for an efficient and effective public administration.</li>
                  <li>Perform researches vital for the strengthening of various aspects of public administration.</li>
                  <li>Provide quality instruction on the principles, trends, thrusts, issues, strategies and approaches in public administration</li>
                  <li>Conduct extension activities that would translate knowledge gained through instruction and findings of graduate research in public administration into forms that can be applied by administrations/managers and other clientele</li>
                </ul>
              `,
                            active: false
                        }
                    ]
                },
                {
                    title: 'College of Agriculture and Allied Fields',
                    icon: 'template/images/programs/caas.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Science in Agriculture major in Animal Science', content: 'Bachelor of Science in Agriculture major in Animal Science content.', active: false },
                        { title: 'Bachelor of Science in Agriculture major in Crop Science', content: 'Bachelor of Science in Agriculture major in Crop Science content.', active: false },
                        { title: 'Bachelor of Science in Agroforestry', content: 'Bachelor of Science in Agroforestry content.', active: false },
                        { title: 'Bachelor of Science in Horticulture', content: 'Bachelor of Science in Horticulture content.', active: false }
                    ]
                },
                {
                    title: 'College of Business and Management',
                    icon: 'template/images/programs/cbm.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Science in Entrepreneurship major in Farm Business', content: ' content.', active: false },
                        { title: 'Bachelor of Science in Entrepreneurship major in Tourism Business', content: ' content.', active: false },
                        { title: 'Bachelor of Science in Hospitality Management', content: ' content.', active: false },
                        { title: 'Bachelor of Science in Tourism Management', content: ' content.', active: false }
                    ]
                },
                {
                    title: 'College of Computer Studies',
                    icon: 'template/images/programs/ccs.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Science in Computer Engineering', content: ' content.', active: false },
                        { title: 'Bachelor of Science in Information Technology', content: ' content.', active: false }
                    ]
                },
                {
                    title: 'College of Criminal Justice Education',
                    icon: 'template/images/programs/ccje.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Science in Criminology', content: ' content.', active: false },
                    ]
                },
                {
                    title: 'College of Teacher Education',
                    icon: 'template/images/programs/cte.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Secondary Education major in: Filipino, Mathematics, Science, English', content: ' content.', active: false },
                        { title: 'Bachelor of Elementary Education', content: ' content.', active: false },
                        { title: 'Bachelor of Technical-Vocational Teacher Education', content: ' content.', active: false }
                    ]
                },
                {
                    title: 'College of Arts and Sciences',
                    icon: 'template/images/programs/cas.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Arts in English Language', content: ' content.', active: false },
                        { title: 'Bachelor of Arts in Political Science', content: ' content.', active: false },
                        { title: 'Bachelor of Arts in Psychology', content: ' content.', active: false },
                        { title: 'Bachelor of Science in Environmental Science', content: ' content.', active: false },
                    ]
                },
                {
                    title: 'Institute of Agricultural and Biosystems Engineering',
                    icon: 'template/images/programs/iabe.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Science in Agricultural and Biosystems Engineering', content: ' content.', active: false },
                    ]
                },
                {
                    title: 'Institute of Fisheries',
                    icon: 'template/images/programs/iof.png',
                    active: false,
                    items: [
                        { title: 'Bachelor of Science in Fisheries', content: ' content.', active: false },
                    ]
                },
                // Add more sections as needed
            ]
        };
    },
    methods: {
        toggleAccordion(index) {
            this.accordionSections.forEach((section, i) => {
                section.active = i === index ? !section.active : false;
            });
        },
        toggleDrawer(sectionIndex, itemIndex) {
            const item = this.accordionSections[sectionIndex].items[itemIndex];
            item.active = !item.active;
        }
    }
};
</script>

<style scoped>
.page-title {
    font-size: 24px;
    color: #333;
}

.background-image {
    width: 100%; /* Set width as needed */
    height: 300px; /* Set height as needed */
    /*background-image: url('template/images/programs/iabe.png'); !* Specify the path to your image *!*/
    background-size: cover; /* Cover the entire background */
    background-position: center; /* Center the background image */
    background-color: #0e5705;
    /* Add any other styling you need */
}

</style>
