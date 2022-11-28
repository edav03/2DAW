const os = require('os');
console.log("Sistema operativo: " + os.platform);
console.log("Versicon del sistema operativo: " + os.release);
console.log("Memoria: " + os.totalmem + ' bytes');
console.log("Memoria libre: " + os.freemem + ' bytes');
console.log("Arquitectura CPU: " + os.arch);
console.log("Numero de procesafores logicos: " + os.cpus().length);
os.cpus().forEach( cpu => {
    console.log('Nombre ' + cpu.model);
    console.log('Nucleos ' + cpu.cores);
})