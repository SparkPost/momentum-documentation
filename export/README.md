This script converts HTML files to Markdown files. Following are the steps to run.

## Grab your original content

Create a folder in the next level up called `original-content`. Put a folder with your content called `docs` inside that folder. The path to this content should now be `../original-content/docs` relative to this directory.

## Install dependencies

```
npm install
```

## Run it

The following command will create a folder `../articles` and put the converted content in there, respecting any directory structure present in `../original-content/docs`.

```
npm run convert
```
