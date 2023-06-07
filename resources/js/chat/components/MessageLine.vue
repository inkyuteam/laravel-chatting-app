<template>
    <li class="flex flex-col mb-4 bg-gray-200 p-2 rounded-r-full transition-all message-line">
        <div class="mb-2 text-start text-teal-700 message-username">
            User 1
        </div>
        <div class="text-start text-sm message-text">
            Hello, How are you?
        </div>
        <div class="text-center mt-3 text-xs message-time">
            <i class="fas fa-solid fa-clock"></i>
            3 hours ago
        </div>
    </li>
</template>

<script>
export default {
    name: "MessageLine"
}
</script>

<style scoped>

</style>
