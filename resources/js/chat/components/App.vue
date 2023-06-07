<template>
    <div v-if="auth && auth.id !== undefined">
        <h2>Select any user to chat with</h2>
        <ul class="mt-3 mx-3 list-none inline-block">
            <li v-for="user in users" v-bind:key="user.id" class="mb-4">
                <i class="fas fa-comment text-teal-700 px-2"></i>
                <a href="#" class="text-teal-700 hover:text-teal-900 underline" v-on:click.prevent="showChatPanel(user)">{{user.name}}</a>
            </li>
        </ul>
    </div>
    <div v-else>
        <p><a href="/login" class="text-teal-700 hover:text-teal-900 underline capitalize">Login to chat>>>></a></p>
    </div>
</template>

<script>

import {provide, ref, reactive} from "vue";

export default {
    name: "App",
    props: ["auth"],
    setup({auth}) {

        provide('auth', auth);

        const onlineUsers = ref([]);

        // storing array of chat panels of clicked users
        // chat panel is an object of this form {selectedUser: null, emittedMessage: null}
        let chatPanels = reactive({panels: []});

        async function getOnlineUsers() {
            const result = await window.axios.get("/online-users");

            if(result.data.users) {
                onlineUsers.value = result.data.users;
            }
        }

        function showChatPanel(user, emittedMessage = null) {
            const isPanelOpened = chatPanels.panels.find(panel => panel.selectedUser.id === user.id);

            if(!isPanelOpened) {
                const userPanel = {
                    selectedUser: user,
                    emittedMessage
                };

                chatPanels.panels.push(userPanel);
                return true;
            }

            // if the panel already opened
            const index = chatPanels.panels.findIndex(panel => panel.selectedUser.id === user.id);

            chatPanels.panels[index] = {...chatPanels.panels[index], emittedMessage};
            return false;
        }

        function hideChatPanel(user) {
            const filtered = [...chatPanels.panels].filter(panel => panel.selectedUser.id !== user.id);

            chatPanels.panels = [...filtered];
        }

        getOnlineUsers();

        return {
            users: onlineUsers,
            showChatPanel,
            hideChatPanel
        }
    }
}
</script>

<style scoped>

</style>
