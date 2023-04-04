<template>
  <v-container fluid>
    <v-row justify="center">
      <v-col cols="12" md="8">
        <v-card>
          <v-card-title>
            <v-icon left>mdi-plus</v-icon> Example Component
          </v-card-title>

          <v-card-text>
            I'm an example component.
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
    <v-row justify="space-around">
      <v-icon large color="green darken-2">
        mdi-domain
      </v-icon>

      <v-icon large color="blue darken-2">
        mdi-message-text
      </v-icon>

      <v-icon large color="purple darken-2">
        mdi-dialpad
      </v-icon>

      <v-icon large color="teal darken-2">
        mdi-email
      </v-icon>

      <v-icon large color="blue-grey darken-2">
        mdi-call-split
      </v-icon>

      <v-icon large color="orange darken-2">
        mdi-arrow-up-bold-box-outline
      </v-icon>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
