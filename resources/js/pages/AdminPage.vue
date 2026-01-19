<script setup lang="ts">
 import { type BreadcrumbItem } from '@/types';
 import { adminPage, dashboard } from '@/routes';

import AppLayout from '@/layouts/AppLayout.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
    {
        title: 'Admin',
        href: adminPage().url,
    },
];


</script>

<template>
     <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">

  <div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">Admin Dashboard</h1>
    
    
    
    
  </div>
 </AppLayout>

</template>

<!-- <script setup>
// No backend yet, just UI
</script> -->

<style scoped>
body {
  background-color: #f3f4f6; /* light gray background */
}
</style>
