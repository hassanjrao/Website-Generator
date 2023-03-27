<template>
    <v-app app>


        <!-- header -->
        <v-card-title>
            <h6 class="headline mb-0">Site Content</h6>

        </v-card-title>

        <!-- divider -->
        <v-divider></v-divider>

        <v-card-text>
            
        </v-card-text>

    </v-app>
</template>

<script>

export default{

    props:{
        site_content:{
            type:Array,
            required:true
        }
    }
}

</script>
