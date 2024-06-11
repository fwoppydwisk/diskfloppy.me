// Define an array of strings
const neverSaid =
    [
      "<strong>ASM:</strong> The Director liked all the props we got today.",
      "<strong>PM:</strong> Ah ha, a revolve. Terrific.",
      "<strong>Chippie:</strong> I don't know, let's look at the ground plan.",
      "<strong>Set Designer:</strong> Well, let's just have whatever is cheaper.",
      "<strong>Sound:</strong> Better turn that down a bit. We don't want to deafen them.",
      "<strong>Director:</strong> Sorry, my mistake.",
      "<strong>Electrics:</strong> This equipment is more complicated than we need.",
      "<strong>Performer:</strong> I really think my big scene should be cut.",
      "<strong>SM:</strong> Can we do that scene change again please?",
      "<strong>LX designer:</strong> Bit more light from those big chaps at the side. Yes that's right, the ones on stalks whatever they are called.",
      "<strong>Electrics:</strong> All the equipment works perfectly.",
      "<strong>Musicians:</strong> So what if that's the end of a call. Let's just finish this bit off.",
      "<strong>Wardrobe:</strong> Now, when exactly is the first dress rehearsal?",
      "<strong>Workshop:</strong> I don't want anyone to know, but if you insist then yes, I admit it, I have just done an all-nighter.",
      "<strong>Performer:</strong> This costume is so comfortable.",
      "<strong>Admin:</strong> The level of overtime payments here are simply unacceptable. Our backstage staff deserve better.",
      "<strong>Box Office:</strong> Comps? No problem.",
      "<strong>Set Designer:</strong> You're right, it looks dreadful.",
      "<strong>Flyman:</strong> No, my lips are sealed. What I may or may not have seen remains a secret.",
      "<strong>Electrics:</strong> That had nothing to do with the computer, it was my fault.",
      "<strong>Crew:</strong> No, no, I'm sure that's our job.",
      "<strong>SMgt:</strong> Thanks, but I don't drink",
      "<strong>Performer:</strong> Let me stand down here with my back to the audience.",
      "<strong>Chippie:</strong> I can't really manage those big fast power tools myself.",
      "<strong>Chippie:</strong> I prefer to use these little hand drills.",
      "<strong>All:</strong> Let's go and ask the Production Manager. He'll know."
    ]

    // Generate a random index into the array
    const randomIndex = Math.floor(Math.random() * neverSaid.length);

// Use document.write to output the random string
document.write(neverSaid[randomIndex]);
