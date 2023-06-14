import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    component: () =>
      import("../components/folder english/page login enligsh.vue"),
  },
  {
    path: "/home_english",
    component: () =>
      import("../components/folder english/page home english.vue"),
  },
  {
    path: "/home_arap",
    component: () => import("../components/folder arap/page home arap.vue"),
  },
  {
    path: "/page_vocational_english",
    component: () =>
      import("../components/folder english/page_vocational_english.vue"),
  },
  {
    path: "/page_vocational_arap",
    component: () =>
      import("../components/folder arap/page_vocational_arap.vue"),
  },
  {
    path: "/page_Client_english",
    component: () =>
      import("../components/folder english/page_Client_english.vue"),
  },
  {
    path: "/page_Client_arap",
    component: () => import("../components/folder arap/page_Client_arap.vue"),
  },
  {
    path: "/index_vocational_english",
    component: () =>
      import("../components/folder english/index_vocational_english.vue"),
    props: true,
  },
  {
    path: "/read_more_english/:id",
    component: () =>
      import("../components/folder english/page read more enlish.vue"),
  },
  {
    path: "/read_more_arap/:id",
    component: () =>
      import("../components/folder arap/page read more arap.vue"),
  },
  {
    path: "/index_vocational_arap",
    component: () =>
      import("../components/folder arap/index_vocational_arap.vue"),
  },
  {
    path: "/index_client_english",
    component: () =>
      import("../components/folder english/index client english.vue"),
  },
  {
    path: "/index_client_arap",
    component: () => import("../components/folder arap/index client arap.vue"),
  },
  {
    path: "/my_page_voictional_english/:id",
    component: () =>
      import("../components/folder english/my page vocational english.vue"),
  },
  {
    path: "/my_page_voictional_arap/:id",
    component: () =>
      import("../components/folder arap/my page voicational arap.vue"),
  },
  {
    path: "/page_counseling_voiactional_english",
    component: () =>
      import(
        "../components/folder english/page Counseling vocational english.vue"
      ),
  },
  {
    path: "/page_counseling_voiactional_arap",
    component: () =>
      import("../components/folder arap/page Counseling vocational arap.vue"),
  },
  {
    path: "/page_counseling_client_english",
    component: () =>
      import("../components/folder english/page Counseling client english.vue"),
  },
  {
    path: "/page_counseling_client_arap",
    component: () =>
      import("../components/folder arap/page Counseling client arap.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
