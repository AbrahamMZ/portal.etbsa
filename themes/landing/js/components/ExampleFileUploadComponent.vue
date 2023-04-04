<template>
  <v-card max-width="500">
    <v-card-text>
      <v-file-input
        v-model="files"
        color="deep-purple accent-4"
        counter
        label="File input"
        multiple
        placeholder="Select your files"
        prepend-icon="mdi-paperclip"
        outlined
        :show-size="1000"
      >
        <template v-slot:selection="{ index, text }">
          <v-chip
            v-if="index < 2"
            color="deep-purple accent-4"
            dark
            label
            small
          >
            {{ text }}
          </v-chip>

          <span
            v-else-if="index === 2"
            class="text-overline grey--text text--darken-3 mx-2"
          >
            +{{ files.length - 2 }} File(s)
          </span>
        </template>
      </v-file-input>
    </v-card-text>
    <v-card-actions>
      <v-spacer></v-spacer>
      <v-btn color="purple" dark @click="uploadFile">Upload</v-btn>
    </v-card-actions>
  </v-card>
</template>
<script>
export default {
  data: () => ({
    files: [],
  }),
  methods: {
    uploadFile() {
      const data = new FormData();
      this.files.forEach((file, i) => {
        data.append(`archivos[${i}]`, file);
      });
      //   data.append("_method", "post");
      axios.post("/api/upload-file", data).then((response) => {
        console.log(response);
      });
    },
  },
};
</script>
