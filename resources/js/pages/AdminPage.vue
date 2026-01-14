<template>
  <div class="p-6">
    <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="font-semibold text-lg mb-2">Users</h2>
        <p>AsiyahTotal users: 42</p>
        <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Users</button>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="font-semibold text-lg mb-2">Orders</h2>
        <p>Pending orders: 5</p>
        <button class="mt-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">View Orders</button>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow p-4">
        <h2 class="font-semibold text-lg mb-2">Products</h2>
        <p>Total products: 12 Asiayahtry</p>
        <button class="mt-2 bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">View Products</button>
      </div>

    </div>
  </div>
</template>

<script setup>
// No backend yet, just UI
</script>

<style scoped>
body {
  background-color: #f3f4f6; /* light gray background */
}
</style>
