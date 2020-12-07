<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-4 text-white"
                >
                    <div class="hero py-16">
                        <!-- container -->
                        <div
                            class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto"
                        >
                            <!-- hero wrapper -->
                            <div
                                class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center"
                            >
                                <!-- hero text -->
                                <div class="hero-text col-span-6">
                                    <h1
                                        class=" font-bold text-4xl md:text-5xl max-w-xl text-white leading-tight"
                                    >
                                        Hello {{ user.name }}
                                    </h1>
                                    <hr
                                        class=" w-12 h-1 bg-yellow-200 rounded-full mt-8"
                                    />
                                    <p
                                        class="text-white text-base leading-relaxed mt-8 font-semibold"
                                    >
                                        {{randQuote}}
                                    </p>
                                    
                                </div>

                                <!-- hero image -->
                                <div class="hero-image col-span-6">
                                    <Skateboard/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end hero -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Skateboard from '../Components/Skateboard';
import quotes from '../Components/quotes'
export default {
    components: {
        AppLayout,
        Skateboard
    },
    props: {
        user: Object
    },
    computed: {
        randQuote(){
            return quotes[Math.floor(Math.random() * quotes.length)];
        }
    }

};
</script>
