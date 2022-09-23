// {
//     const Jimp = require('jimp');
//     const fs = require('fs')//nativo do node
//     const images = fs.readdirSync('./upload/')

//     images.forEach((image) => {
//         Jimp.read('./upload/' + image).then((image) => {
//             image
//                 .cover(400, 400)
//                 .greyscale()
//                 .write('./imagens/' + image)
//         }).catch((err) => {
//             console.error(err);
//         })
//     })
// }