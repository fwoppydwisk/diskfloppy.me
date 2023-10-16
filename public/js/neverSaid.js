// Define an array of strings
const neverSaid = [
    "<td><strong>ASM:</strong></td> <td>The Director liked all the props we got today.</td>",
    "<td><strong>PM:</strong></td> <td>Ah ha, a revolve. Terrific.</td>",
    "<td><strong>Chippie:</strong></td> <td>I don't know, let's look at the ground plan.</td>",
    "<td><strong>Set Designer:</strong></td> <td>Well, let's just have whatever is cheaper.</td>",
    "<td><strong>Sound:</strong></td> <td>Better turn that down a bit. We don't want to deafen them.</td>",
    "<td><strong>Director:</strong></td> <td>Sorry, my mistake.</td>",
    "<td><strong>Electrics:</strong></td> <td>This equipment is more complicated than we need.</td>",
    "<td><strong>Performer:</strong></td> <td>I really think my big scene should be cut.</td>",
    "<td><strong>SM:</strong></td> <td>Can we doo that scene change again please?",
    "<td><strong>LX designer:</strong></td> <td>Bit more light from those big chaps at the side. Yes that's right, the ones on stalks whatever they are called.</td>",
    "<td><strong>Electrics:</strong></td> <td>All the equipment works perfectly.</td>",
    "<td><strong>Musicians:</strong></td> <td>So what if that's the end of a call. Let's just finish this bit off.</td>",
    "<td><strong>Wardrobe:</strong></td> <td>Now, when exactly is the first dress rehearsal?",
    "<td><strong>Workshop:</strong></td> <td>I don't want anyone to know, but if you insist then yes, I admit it, I have just done an all-nighter.</td>",
    "<td><strong>Performer:</strong></td> <td>This costume is so comfortable.</td>",
    "<td><strong>Admin:</strong></td> <td>The level of overtime payments here are simply unacceptable. Our backstage staff deserve better.</td>",
    "<td><strong>Box Office:</strong></td> <td>Comps? No problem.</td>",
    "<td><strong>Set Designer:</strong></td> <td>You're right, it looks dreadful.</td>",
    "<td><strong>Flyman:</strong></td> <td>No, my lips are sealed. What I may or may not have seen remains a secret.</td>",
    "<td><strong>Electrics:</strong></td> <td>That had nothing to do with the computer, it was my fault.</td>",
    "<td><strong>Crew:</strong></td> <td>No, no, I'm sure that's our job.</td>",
    "<td><strong>SMgt:</strong></td> <td>Thanks, but I don't drink",
    "<td><strong>Performer:</strong></td> <td>Let me stand down here with my back to the audience.</td>",
    "<td><strong>Chippie:</strong></td> <td>I can't really manage those big fast power tools myself.</td>",
    "<td><strong>Chippie:</strong></td> <td>I prefer to use these little hand drills.</td>",
    "<td><strong>All:</strong></td> <td>Let's go and ask the Production Manager. He'll know.</td>"
]

// Generate a random index into the array
const randomIndex = Math.floor(Math.random() * neverSaid.length);

// Use document.write to output the random string
document.write(neverSaid[randomIndex]);
