console.log('Uzdaviniu sprendimas');

//7.	(STATIC) Klasėje Kibiras1 (pirmas uždavinys) sukurti metodą 
//akmenuSkaiciusVisuoseKibiruose(), kuris rodytų bendrą visuose kibiruose 
//pririnktų akmenų kiekį (visuose sukurtuose Kibiras objektuose). Skaičiuoti 
//akmenim, kurie buvo surinkti visuose objektuose, naudokite statinę savybę 
//visiAkmenys (kurioje yra įrašytas ir saugomas bendras akmenų skaičius). 
//Taip pat atitinkamai modifikuokite metodus prideti1Akmeni(),  pridetiDaugAkmenu(kiekis).

class Kibiras1 {
    constructor() {
        this.akmenuKiekis = 0;
    }
    prideti1Akmeni() {
        this.akmenuKiekis++;
        }
        pridetiDaugAkmenu(kiekis) {
            this.akmenuKiekis += kiekis;
        }
        kiekPririnktaAkmenu() {
            console.log('Akmenu kiekis:', this.akmenuKiekis);
        }
} 
const kibiras1 = new Kibiras1();
const kibiras2 = new Kibiras1();
const kibiras3 = new Kibiras1();

kibiras1.prideti1Akmeni();
kibiras1.prideti1Akmeni();
kibiras1.prideti1Akmeni();
kibiras1.pridetiDaugAkmenu(10);

kibiras2.prideti1Akmeni();

kibiras3.prideti1Akmeni();
kibiras3.prideti1Akmeni();
kibiras3.prideti1Akmeni();
kibiras3.prideti1Akmeni();
kibiras3.prideti1Akmeni();
kibiras3.prideti1Akmeni();
kibiras3.prideti1Akmeni();
kibiras3.pridetiDaugAkmenu(100);


kibiras1.kiekPririnktaAkmenu();
kibiras2.kiekPririnktaAkmenu();
kibiras3.kiekPririnktaAkmenu();


//8.	Sukurti klasę Stikline. Sukurti savybes turis ir kiekis. Turis turi 
//būti pasirenkamas objekto kūrimo metu. Parašyti metodą ipilti(kiekis), kuris 
//keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas 
//kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), 
//kuris grąžina kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka 
//per stalo viršų.  Sukurti metodą stiklinejeYra(), kuris į konsolę atspausdintų 
//kiek stiklinėje yra skysčio. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. 
//Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

class Stikline {
    constructor(turis) {
        this.turis = turis;
        this.kiekis = 0;
    }

        ipilti(kiekis) {
            this.kiekis = Math.min(this.turis, this.kiekis + kiekis);
            return this;
        }

        ispilti() {
            const kiekis = this.kiekis;
            this.kiekis = 0;
            return kiekis;
        }

        stiklinejeYra() {
            console.log('Stiklineje yra:', this.kiekis);
        }
} 
const stikline200 = new Stikline(200);
const stikline150 = new Stikline(150);
const stikline100 = new Stikline(100);

stikline100.ipilti(stikline200.ipilti(stikline150.ipilti(500).ispilti()).ispilti());
stikline100.stiklinejeYra();
stikline150.stiklinejeYra();
stikline200.stiklinejeYra();



//9.	Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys, kuri turi savybę dydis,
//kuriai konstruktoriuje yra priskiriama reikšmė 500 ir savybę prikrauta (kuri pradžioje lygi 0). 
//Grybas turi tris savybes, kurios taip pat yra paskaičiuojamos konstruktoriuje: valgomas, 
//sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai (rand funkcija) 
//priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- 
//nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir 
//valgomas dėti į Krepsi objektą, t.y. Vykdyti deti(grybas) metodą kol bus pririnktas 
//pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti truputį daugiau nei dydis).

class Grybas {
  constructor() {
    this.svoris = this.rand(5, 45);
    this.valgomas = !this.rand(0, 1);
    this.sukirmijes = !this.rand(0, 1);
  }

  rand(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min);
  }
}

class Krepsys {
  constructor() {
    this.dydis = 500;
    this.prikrauta = 0;
  }

  prideti(grybas) {
    if (!grybas.sukirmijes && grybas.valgomas) {
        this.prikrauta += grybas.svoris;
    }
    return this.dydis >= this.prikrauta;
  }
}

const krepsys = new Krepsys();

while(krepsys.prideti(new Grybas())) {}

console.log('Krepsyje yra:', krepsys);