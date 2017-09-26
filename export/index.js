const dirTree = require('directory-tree');
const fs = require('fs');
const path = require('path');
const rimraf = require('rimraf');
const toMarkdown = require('./utils/to-markdown');
const source = path.join(__dirname, '../original-content/docs');
const destination = path.join(__dirname, '../articles');

rimraf(destination, () => {
  const tree = dirTree(source, {
    extensions: /\.php/,
    exclude: /(css|pdfs|style|images)/
  });

  processDirectory(tree);
});

function processDirectory(obj) {
  if (obj.type === 'directory') {
    let newPath = obj.path.replace(source, destination);
    console.log(`processing directory ${newPath}`);

    // create a matching folder in the destination
    fs.mkdirSync(newPath);

    // traverse if we have children
    if (obj.children.length > 0) {
      console.log(`detected ${obj.children.length} children`);
      obj.children.forEach((child) => {
        processDirectory(child);
      });
    }
  } else {
    // it's a file, do something with it
    let newPath = obj.path.replace(source, destination).replace('.php', '.md');
    console.log(`processing file ${newPath}`);

    let content = fs.readFileSync(obj.path, 'utf8');
    let markdown = toMarkdown(content);
    fs.writeFileSync(newPath, markdown);
  }
}

