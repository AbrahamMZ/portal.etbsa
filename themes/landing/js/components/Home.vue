<template>
  <div>
    <v-app-bar class="white">
      <v-toolbar-title>ETBSA</v-toolbar-title>
    </v-app-bar>
    <v-main>
      <section>
        <v-parallax src="https://via.placeholder.com/1200x600" height="600">
          <v-row justify="center" class="white--text flex-column align-center">
            <!-- <img
              src="https://via.placeholder.com/50x50"
              alt="VVA"
              height="200"
            /> -->
            <h1 class="white--text mb-2 text-h4 text-center">
              ETBSA
            </h1>
            <div class="subheading mb-3 text-center">
              Powered by Vuetify
            </div>
            <v-btn class="blue lighten-2 mt-5" dark large to="/singin">
              Get Started
            </v-btn>
          </v-row>
        </v-parallax>
      </section>

      <section>
        <v-row>
          <v-col cols="12" class="text-center">
            <div class="text-center">
              <h2 class="text-h5">
                The best way to start developing
              </h2>
              <span class="subheading">
                Cras facilisis mi vitae nunc
              </span>
            </div>
          </v-col>
          <v-col cols="12">
            <v-container>
              <v-row>
                <v-col cols="12" md="4">
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-center">
                      <v-icon x-large class="blue--text text--lighten-2">
                        mdi-material-design
                      </v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="text-h5 text-center">
                        Material Design
                      </div>
                    </v-card-title>
                    <v-card-text>
                      Lorem ipsum dolor sit amet.
                    </v-card-text>
                  </v-card>
                </v-col>
                <v-col cols="12" md="4">
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-center">
                      <v-icon x-large class="blue--text text--lighten-2">
                        mdi-flash
                      </v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="text-h5">
                        Fast development
                      </div>
                    </v-card-title>
                    <v-card-text>
                      Lorem ipsum dolor sit amet.
                    </v-card-text>
                  </v-card>
                </v-col>
                <v-col cols="12" md="4">
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-center">
                      <v-icon x-large class="blue--text text--lighten-2">
                        mdi-open-source-initiative
                      </v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="text-h5 text-center">
                        Completely Open Sourced
                      </div>
                    </v-card-title>
                    <v-card-text>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Facilis, praesentium!
                    </v-card-text>
                  </v-card>
                </v-col>
              </v-row>
            </v-container>
          </v-col>
        </v-row>
      </section>

      <section>
        <v-parallax src="https://via.placeholder.com/2000x600" height="380">
          <v-row justify="center" class="flex-column align-center">
            <div class="text-h5 white--text mb-3 text-center">
              Web development has never been easier
            </div>
            <em>Kick-start your application today</em>
            <v-btn class="blue lighten-2 mt-5" dark large to="/singin">
              Get Started
            </v-btn>
          </v-row>
        </v-parallax>
      </section>

      <v-footer class="blue darken-2">
        <v-row class="align-center">
          <v-col cols="12" class="text-center">
            <div class="white--text">
              Made with by
              <a
                class="white--text"
                href="https://vuetifyjs.com"
                target="_blank"
              >
                Vuetify
              </a>
              Paralax Them by
              <a
                class="white--text"
                href="https://github.com/vwxyzjn"
                target="_blank"
              >
                Costa Huang
              </a>
              ETBSA by
              <a
                class="white--text"
                href="https://nelsoneax.github.io"
                target="_blank"
              >
                NelsonEAX
              </a>
            </div>
          </v-col>
        </v-row>
      </v-footer>
    </v-main>
  </div>
</template>

<script>
export default {
  name: "Landing",
  data: () => ({}),
};
</script>
