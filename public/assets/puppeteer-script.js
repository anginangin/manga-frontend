const puppeteer = require('./js/puppeteer');

const url = process.argv[2]; // URL passed as a command line argument

(async () => {
  const browser = await puppeteer.launch({
    headless: true, // Set to false for non-headless mode
    args: ['--no-sandbox'],
  });
  const page = await browser.newPage();

  await page.goto(url, { waitUntil: 'domcontentloaded' });

  // Evaluate JavaScript function to filter DOM elements
  const filteredData = await page.evaluate(() => {
    // Custom filtering logic, for example, selecting all <a> elements with a specific class
    const elements = Array.from(document.querySelectorAll('.clstyle li'));
    const filteredElements = elements.map(element => {
      return {
        cp: element.querySelector('.chapternum').textContent,
        url: element.querySelector('a').href
      };
    });
    return filteredElements;
  });

  console.log(JSON.stringify({
    data: filteredData
  }));

  await browser.close();
})();
