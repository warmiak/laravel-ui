<template>
<div class="container mx-auto">
    <div class="lg:flex lg:justify-between lg:items-center lg:py-4 lg:px-2">
        <div class="flex items-center justify-between px-4 py-3 lg:p-0">
            <div>
                <a href="/"><img class="h-12" src="/images/logo.png" alt="Logo"></a>
            </div>
            <div class="lg:hidden">
                <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-black focus:text-black focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                        <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <nav :class="isOpen ? 'block' : 'hidden'" class="lg:block">
            <div class="px-2 pt-2 pb-4 lg:flex lg:p-0">
                <a href="/" class="block px-2 py-1 text-gray-600 font-semibold rounded hover:text-gray-800">Startseite</a>
                <a href="/admin" class="block px-2 py-1 text-gray-600 font-semibold rounded hover:text-gray-800">Admin</a>
                <a v-if="!user" href="/login" class="block px-2 py-1 text-gray-600 font-semibold rounded hover:text-gray-800">Anmeldung</a>
                <account-dropwdown v-if="user" class="hidden lg:block" />
            </div>

            <div v-if="user" class="px-4 py-5 border-t border-gray-600 lg:hidden">
                <div class="flex items-center">
                    <img class="h-8 w-8 border-2 border-gray-600 rounded-full object-cover" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                    <span class="font-semibold ml-3">Jon Doe</span>
                </div>
                <div class="mt-4">
                    <a href="/home" class="block text-gray-600">Account settings</a>
                    <a href="#" class="mt-2 block text-gray-600 hover:text-gray-800">Support</a>
                    <a href="#" class="mt-2 block text-gray-600" @click.prevent="logoutUser">Sign out</a>
                </div>
            </div>
        </nav>
    </div>
</div>
</template>

<script>
    export default {
        name: "Navigation",
        data() {
            return {
                isOpen: false,
            }
        },
        props: {
            user: {
                type: Object,
                default: null
            },
        },
        methods: {
            logoutUser() {
                axios.post('/logout')
                    .then(function (response) {
                        window.location = '/';
                    })
                    .catch(function (error) {
                        //
                    });
            }
        },
    }
</script>

<style scoped>

</style>