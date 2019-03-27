<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none">
            Full Logo
        </h1>

        <div class="mb-10">
            <picture
                style="height: 382px"
                class="block shadow rounded-lg flex item-center justify-center mb-6"
            >
                <img src="/images/logo.svg" alt="logo">
            </picture>
            
            <div class="flex justify-between items-center">
                <p>Original Logo on <strong>white</strong> backgroud</p>
                
                <a 
                    class="border border-grey-light rounded-full px-8 py-2 text-black font-bold text-xs" 
                    href="/images/logo.svg"
                >logo.svg</a>
            </div>
        </div>

        <div class="pb-10">
            <picture
                style="height: 382px"
                class="block shadow rounded-lg flex item-center justify-center mb-6 bg-blue"
            >
                <img src="/images/negative-logo.svg" alt="logo">
            </picture>
            
            <div class="flex justify-between items-center">
                <p>Negative Logo on <strong>white</strong> backgroud</p>
                
                <a 
                    class="border border-grey-light rounded-full px-8 py-2 text-black font-bold text-xs" 
                    href="/images/negative-logo.svg"
                >logo.svg</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
