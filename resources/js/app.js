import "./bootstrap";
import DataTable from "datatables.net-dt";
import jquery from "jquery";
// import "preline/dist/preline.js";
import HSDataTable from "@preline/datatable";
import Alpine from "alpinejs";
import('preline')
window.jQuery = jquery;
window.$ = jquery;
window.DataTable = DataTable;
window.HSDataTable = HSDataTable;
window.Alpine = Alpine;

Alpine.start();

