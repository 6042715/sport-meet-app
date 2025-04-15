const messages = [
    {
        afbeelding: 'profile1.png',
        naam: 'Piet Janssen',
        bericht: 'Jongens, laten we lekker sportief zijn en sporten!💪',
        time: 1000,
        color: 1
    },
    {
        afbeelding: 'profile2.png',
        naam: 'Lennard James',
        bericht: 'Klinkt als een goed plan!',
        time: 2500,
        color: 2
    },
    {
        afbeelding: 'profile2.png',
        naam: 'Lennard James',
        bericht: 'Hoe laat komt jullie uit?',
        time: 3250,
        color: 2
    },
    {
        afbeelding: 'profile3.png',
        naam: 'Mary Smedensmeed',
        bericht: 'Wat zullen we doen voor oefeningen?',
        time: 4500,
        color: 3
    },
    {
        afbeelding: 'profile3.png',
        naam: 'Mary Smedensmeed',
        bericht: 'Mij lijkt basketbal wel leuk!!!',
        time: 5500,
        color: 3
    },
    {
        afbeelding: 'profile2.png',
        naam: 'Lennard James',
        bericht: 'Ik vind dat ook wel leuk altijd! #basketbalpro',
        time: 6500,
        color: 2
    },
    {
        afbeelding: 'profile2.png',
        naam: 'Lennard James',
        bericht: 'Ze noemen me soms ook wel Lebron James, want ik speel enorm graag basketbal!',
        time: 7750,
        color: 2
    },
    {
        afbeelding: 'profile1.png',
        naam: 'Piet Janssen',
        bericht: 'Ik ben nooit heel goed in basketbal, maar ik kan het altijd proberen! haha😊',
        time: 8500,
        color: 1
    },
    {
        afbeelding: 'profile4.png',
        naam: 'Gerald Mannen',
        bericht: 'Wie neemt de bal mee? Ik heb er helaas geen, dus ik kan in ieder geval de bal niet meenemen...',
        time: 9500,
        color: 4

    },
    {
        afbeelding: 'profile1.png',
        naam: 'Piet Janssen',
        bericht: 'Stuur allemaal even "ja" of "nee", dan kan ik drankjes halen! ik voel me erg aardig vandaag! hihi',
        time: 11000,
        color: 1
    },
    {
        afbeelding: 'profile4.png',
        naam: 'Gerald Mannen',
        bericht: 'Ja',
        time: 12100,
        color: 4
    },
    {
        afbeelding: 'profile2.png',
        naam: 'Lennard James',
        bericht: 'Ja!',
        time: 14000,
        color: 2
    },
    {
        afbeelding: 'profile3.png',
        naam: 'Mary Smedensmeed',
        bericht: 'ja 👍',
        time: 14500,
        color: 3
    },
    {
        afbeelding: 'profile1.png',
        naam: 'Piet Janssen',
        bericht: 'We kunnen dus allemaal? Helemaal top! Ik kijk ernaar uit!',
        time: 15100,
        color: 1
    },
    {
        afbeelding: 'profile3.png',
        naam: 'Mary Smedensmeed',
        bericht: ['img', 'happy.png'],
        time: 17000,
        color: 3
    }
];

const myMsg = "Helemaal top mensen!, ik kijk er nu al naar uit. Fijne dag, en tot morgen mensen! Toedels! Oh, en ik hou ook erg van basketball, dus dat komt mij ook wel goed uit!";

const msgSplit = myMsg.split("");
const currentText = [];

let count = 0;

const textInput = document.getElementById("textInput");

for (const letter of msgSplit) {
    const curTime = 100 + count * 100;
    setTimeout(() => {
        currentText.push(letter);
        textInput.textContent = currentText.join("");

        textInput.scrollTop = textInput.scrollHeight;
    }, curTime);
    count++;
    
}
setTimeout(() => {
    createMSG('selfProfile.png', 'me', myMsg, 5,  true);
    textInput.textContent = "";
}, 1000 + msgSplit.length * 100);

const startBubble = document.getElementById("templateMSG");
const chatSection = document.getElementById("chatSection");

startBubble.remove();

for(const msg of messages){
    setTimeout(() => createMSG(msg.afbeelding, msg.naam, msg.bericht, msg.color), msg.time);
}

function createMSG(img, naam, bericht, color, self){
    const thisBubble = startBubble.cloneNode(true);
    thisBubble.querySelector('img').src = `img/placeholders/${img}`;
    thisBubble.querySelector('H3').innerHTML = naam;
    thisBubble.querySelector('P').innerHTML = bericht;
    chatSection.append(thisBubble);
    console.log("boom");

    if(self == true){
        thisBubble.classList.add("selfMSG");
    }
    if(bericht.constructor == Array){
        const imageHolder = document.createElement("img");
        imageHolder.src = `img/${bericht[1]}`;

        imageHolder.style.width = "90%";
        imageHolder.style.height = "90%"
        imageHolder.style.borderRadius = "5px";

        thisBubble.querySelector('P').innerHTML = "Ik kijk er nu al naar uit!";

        thisBubble.querySelector('P').appendChild(imageHolder);

        thisBubble.style.height = "35% !important";
    }

    //werkt niet ): maar is ook niet per se nodig..
    let i = chatSection.scrollTop;
    const scrollHeight = chatSection.scrollHeight;
    const interval = setInterval(() => {
        i += 5; // speed
        chatSection.scrollTop = i;
        if (i >= scrollHeight) {
            clearInterval(interval);
        }
    }, 5);

    thisBubble.querySelector("div").classList.add(`color${color}`)

    chatSection.scrollTop = chatSection.scrollHeight;
}