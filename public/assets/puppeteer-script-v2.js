const puppeteer = require('puppeteer');

const url = process.argv[2]; // URL passed as a command line argument

(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();

  await page.goto(url, { waitUntil: 'domcontentloaded' });

  // Evaluate JavaScript function to filter DOM elements
  const htmlContent = await page.content();

  console.log(JSON.stringify({
    data: htmlContent
  }));

  await browser.close();
})();
