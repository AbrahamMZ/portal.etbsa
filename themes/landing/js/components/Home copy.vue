<template>
  <div>
    <example-component></example-component>
    <v-divider class="my-4"></v-divider>
    <example-tree-component></example-tree-component>
    <v-divider class="my-4"></v-divider>
    <example-file-upload></example-file-upload>
    <v-divider class="my-4"></v-divider>
    <example-tree-file style="width: 600px;" dark></example-tree-file>
    <v-divider class="my-4"></v-divider>
    <table-demo></table-demo>
  </div>
</template>
<script>
import ExampleTreeComponent from "./ExampleTreeComponent.vue";
import ExampleFileUpload from "./ExampleFileUploadComponent.vue";
import ExampleTreeFile from "./ExampleTreeFilesComponent.vue";
import TableDemo from "./TableDemoComponent.vue";
export default {
  name: "Home",
  components: {
    ExampleTreeComponent,
    ExampleFileUpload,
    ExampleTreeFile,
    TableDemo,
  },
};
</script>
<style lang=""></style>
