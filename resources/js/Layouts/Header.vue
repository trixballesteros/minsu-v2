<template>
    <el-menu
        :default-active="activeIndex"
        class="el-menu-demo"
        mode="horizontal"
        :style="{ height: '70px' }"
        :ellipsis="false"
        @select="handleSelect"
    >
        <el-menu-item index="0" style="font-size:20px ">
                <img
                    style="height: 100%; max-height: 100%;"
                    src="/template/images/responsive-logo.png"
                    alt="MinSU Logo"
                />
            <a href="/">  Back to Home </a>

        </el-menu-item>
<!--        <div class="flex-grow" />-->

<!--        <el-sub-menu index="1">-->
<!--            <template #title>About</template>-->
<!--            <el-menu-item index="1-1">-->
<!--                <a href="/about/history">-->
<!--                    History-->
<!--                </a>-->
<!--            </el-menu-item>-->
<!--            <el-menu-item index="1-2">-->
<!--                <a href="/about/vmgo">-->
<!--                    VMGO-->
<!--                </a>-->
<!--                </el-menu-item>-->
<!--            <el-menu-item index="1-3">Hymn</el-menu-item>-->
<!--            <el-menu-item index="1-4">Core Values</el-menu-item>-->
<!--            <el-menu-item index="1-5">Quality Policy</el-menu-item>-->
<!--        </el-sub-menu>-->

<!--        <el-sub-menu index="2">-->
<!--            <template #title>Good Governance</template>-->
<!--            <el-menu-item index="2-1">-->
<!--                <a href="/good-governance/citizens-charter">-->
<!--                    Citizen Charter-->
<!--                </a>-->
<!--            </el-menu-item>-->
<!--            <el-menu-item index="2-2">Transparency</el-menu-item>-->
<!--            <el-menu-item index="2-3">Freedom of Information</el-menu-item>-->
<!--            <el-menu-item index="2-4">PhilGEPS</el-menu-item>-->
<!--        </el-sub-menu>-->

<!--        <el-sub-menu index="3">-->
<!--            <template #title>Academics</template>-->
<!--            <el-menu-item index="3-1">-->
<!--                <a href="/good-governance/citizens-charter">-->
<!--                    Admission-->
<!--                </a>-->
<!--                </el-menu-item>-->
<!--            <el-menu-item index="3-2">Programs</el-menu-item>-->
<!--            <el-sub-menu index="3-3">-->
<!--                <template #title>Offices</template>-->
<!--                <el-menu-item index="3-3-1">Student Affairs and Services</el-menu-item>-->
<!--                <el-menu-item index="3-3-2">Guidance Counselor</el-menu-item>-->
<!--                <el-menu-item index="3-3-3">Registrar's Office </el-menu-item>-->
<!--                <el-menu-item index="3-3-4">NSTP </el-menu-item>-->
<!--            </el-sub-menu>-->
<!--        </el-sub-menu>-->

<!--        <el-sub-menu index="4">-->
<!--            <template #title>Administration</template>-->
<!--            <el-sub-menu index="3-1">-->
<!--                <template #title>Offices</template>-->
<!--                <el-menu-item index="3-1-1">Office of the President</el-menu-item>-->
<!--                <el-menu-item index="3-1-2">Office of the Vice President for Academic Affairs</el-menu-item>-->
<!--                <el-menu-item index="3-1-3">Office of the Vice President for Administration and Finance</el-menu-item>-->
<!--                <el-menu-item index="3-1-4">Office of the Vice President for Research, Development and Extension</el-menu-item>-->
<!--            </el-sub-menu>-->
<!--        </el-sub-menu>-->


<!--        <el-menu-item index="5">Research</el-menu-item>-->
<!--        <el-menu-item index="6">Services</el-menu-item>-->
    </el-menu>
</template>

<script setup>
import { ref } from 'vue'
import { ElMenu, ElMenuItem, ElSubMenu } from 'element-plus'

const activeIndex = ref('1')
const handleSelect = (key, keyPath) => {
    console.log(key, keyPath)
}
</script>

<style scoped>
.el-menu-demo {
    line-height: 80px; /* Adjust the line-height to center the items vertically */
}

.flex-grow {
    flex-grow: 1;
}
</style>
