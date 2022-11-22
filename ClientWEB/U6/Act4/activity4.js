function Computer(markup, model, ram = 4, harddisk = 512, screen = 17) {
    this.markup = markup;
    this.model = model;
    this.ram = ram;
    this.harddisk = harddisk;
    this.screen = screen;
}

function Laptop(autonomy, screen = 12, harddisk = 256) {
    this.__proto__ = new Computer();

    this.autonomy = autonomy;
    this.screen = screen;
    this.hardDisk = harddisk;
}

function toString(a) {
    console.log(JSON.stringify(new Computer(a.markup, a.model, a.ram, a.harddisk, a.screen)))
}

let a = new Computer('hp', 'modelo', 5, 765, 18);
toString(a);