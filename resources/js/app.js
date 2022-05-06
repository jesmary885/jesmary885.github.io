require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

//createInertiaApp({
 // resolve: name => require(`./Pages/${name}`),
/* title: (title) => `${title} - ${appName}`,
 resolve: name => import(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)  
      .mixin({ methods: { route } }) // add it
      .mount(el)
  },
})*/


createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => require(`./Pages/${name}.vue`),
  setup({ el, app, props, plugin }) {
      return createApp({ render: () => h(app, props) })
          .use(plugin)
          .mixin({ methods: { route } })
          .mount(el);
  },
});

InertiaProgress.init({ color: '#4B5563' });

InertiaProgress.init({ color: '#4B5563' });
