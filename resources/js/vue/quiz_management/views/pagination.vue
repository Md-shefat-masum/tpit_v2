<template>
    <nav aria-label="Page navigation example" class="">
        <ul class="pagination pagination-primary">
            <template v-for="(link, index) in data.links">
                <li :key="index" class="page-item" :class="{ active: link.active }">
                    <a class="page-link" @click.prevent="() => link.url ? method(link.url) : ''" :href="link.url"
                        v-html="`<span>${link.label}</span>`">
                    </a>
                </li>
            </template>
        </ul>
    </nav>
</template>

<script>
export default {

    props: {
        data: Object,
        method: Function
    },
    

}
</script>

<style></style>