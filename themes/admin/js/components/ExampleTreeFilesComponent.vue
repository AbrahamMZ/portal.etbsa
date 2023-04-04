<template>
  <!-- @update:active="openfile" -->
  <v-treeview
    v-model="tree"
    :items="items"
    activatable
    item-key="id"
    item-text="file_name"
    open-on-click
    return-object
    dense
    selectable
  >
    <template v-slot:prepend="{ item, open }">
      <v-icon v-if="!item.file_ext">
        {{ open ? "mdi-folder-open" : "mdi-folder" }}
      </v-icon>
      <v-icon v-else>
        {{ files[item.file_ext] }}
      </v-icon>
    </template>
  </v-treeview>
</template>
<script>
export default {
  data() {
    return {
      initiallyOpen: ["public"],
      files: {
        html: "mdi-language-html5",
        js: "mdi-nodejs",
        json: "mdi-code-json",
        md: "mdi-language-markdown",
        pdf: "mdi-file-pdf",
        png: "mdi-file-image",
        jpg: "mdi-file-image",
        txt: "mdi-file-document-outline",
        docx: "mdi-file-document-outline",
        xls: "mdi-file-excel",
      },
      tree: [],
      items: [],
    };
  },

  mounted() {
    this.getFiles();
  },
  methods: {
    getFiles() {
      const _this = this;
      axios.get("/api/file").then((response) => {
        let files = response.data;
        _this.items = files;
        // _this.items.push(
        //   { children: files, file_name: "documents" },
        //   {
        //     file_name: "public",
        //     children: [
        //       {
        //         file_name: "static",
        //         children: [
        //           {
        //             file_name: "logo.png",
        //             file_ext: "png",
        //           },
        //         ],
        //       },
        //       {
        //         file_name: "favicon.ico",
        //         file_ext: "png",
        //       },
        //       {
        //         file_name: "index.html",
        //         file_ext: "html",
        //       },
        //     ],
        //   }
        // );
      });
    },
    openfile(event) {
      console.log(event);
      if (event != undefined && event.length > 0) {
        !!event[0].path ? window.open(event[0].path, "download") : "";
      }
    },
  },
};
</script>
