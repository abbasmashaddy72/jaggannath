require("./bootstrap");
require("./hope-ui");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import Scrollbar from "smooth-scrollbar";

window.Scrollbar = Scrollbar;
Scrollbar.init(document.querySelector(".data-scrollbar"), {
    continuousScrolling: false,
});
