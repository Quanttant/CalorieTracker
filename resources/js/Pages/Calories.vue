<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-4 text-white"
                >
                    Your basal metabolic rate is <code>{{ basal }}</code> kcal.
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "calories",
    components: {
        AppLayout
    },
    data() {
        return {
            basal: null,
            calories: []
        };
    },
    methods: {
        BMH() {
            axios
                .get("user_bmh")
                .then(resp => {
                    this.basal = resp.data;
                })
                .catch(err => {
                    console.log(err);
                });
        },
        status() {
            axios
                .get("user_calories")
                .then(resp => {
                    this.calories = resp.data;
                })
                .catch(err => {
                    console.log(err);
                });
        }
    },
    mounted() {
        this.BMH();
        this.status();
    }
};
</script>
