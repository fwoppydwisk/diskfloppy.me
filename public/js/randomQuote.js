const quotes = [
    {
        "quote": "KING: \"Mmm? Oh, yeah. No.\"",
        "attribution": "The Owl House, S1E05"
    },
    {
        "quote": "KING: \"I'm stealing everything that's not nailed down!\"",
        "attribution": "The Owl House, S1E06"
    },
    {
        "quote": "EDA: \"Ahh sure. Spare us.\"<br>" +
            "LILITH: \"Woe to us whose fates are sealed.\"",
        "attribution": "The Owl House, S1E11"
    },
    {
        "quote": "EDA: \"Hey freeloaders! Guess what today is!\"",
        "attribution": "The Owl House, S1E12"
    },
    {
        "quote": "EDA: \"Quitting! It's like trying, but easier!\"",
        "attribution": "The Owl House, S1E13"
    },
    {
        "quote": "KING: \"Can it, fangs! You don't know diddly-dang about squiddly-squat!\"",
        "attribution": "The Owl House, S1E13"
    },
    {
        "quote": "KING: \"Holy bones, you poofed it! Call the cops, this guy's crazy!\"",
        "attribution": "The Owl House, S1E14"
    },
    {
        "quote": "EDA: \"There is one way, but it's terribly dangerous and partially illegal.\"",
        "attribution": "The Owl House, S1E15"
    },
    {
        "quote": "GUS CLONE: \"I'd rather die than expose my secrets!\"<br>" +
            "GUS: \"Then die, you shall!\"",
        "attribution": "The Owl House, S1E15"
    },
    {
        "quote": "LUZ: \"Vee, you're giving up too quick!\"<br>" +
            "VEE: \"I'm being realistic.\"",
        "attribution": "The Owl House, S2E10"
    },
    {
        "quote": "LUZ: \"I have questions about that name...\"<br>" +
            "LILITH: \"And I have questions about my life!\"",
        "attribution": "The Owl House, S2E12"
    },
    {
        "quote": "EMIRA: \"We can shout as loud as we want, but money always shouts louder.\"",
        "attribution": "The Owl House, S2E20"
    },
    {
        "quote": "VEE: \"Uhh, no, I'm new in town, I just have one of those faces! But, ju-just one, the normal amount of face.\"",
        "attribution": "The Owl House, S3E01"
    },
    {
        "quote": "RAINE: \"You Know I Hate These Things. Talking To People. Waving To People. People.\"",
        "attribution": "The Owl House, S2E11"
    }
];

const randomIndex = Math.floor(Math.random() * quotes.length);
const quote = quotes[randomIndex];

// Use document.write to output the random string
document.write(`${quote.quote}<br><small>(${quote.attribution})</small>`);

