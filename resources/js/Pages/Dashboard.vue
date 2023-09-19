<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const form = useForm({
    searchedCourses: '',
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Courses</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>

            </div>
        </div>
        <PrimaryButton>Add Course</PrimaryButton>
        <TextInput id="courses" type="text" placeholder="..." class="mt-1 ml-3 block items-center w-full justify-center"
            v-model="form.searchedCourses" required autofocus autocomplete="courses" />
        <PrimaryButton>Search</PrimaryButton>

    </AuthenticatedLayout>
</template>
