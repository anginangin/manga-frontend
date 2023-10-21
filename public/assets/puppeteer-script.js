const puppeteer = require('puppeteer');

const url = process.argv[2]; // URL passed as a command line argument

(async () => {
  const browser = await puppeteer.launch({
    headless: true, // Set to false for non-headless mode
    args: ['--no-sandbox', '--disable-setuid-sandbox'],
  });
  const page = await browser.newPage();

  await page.goto(url, { waitUntil: 'domcontentloaded' });
  await page.setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
  await page.waitForSelector('.clstyle');
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
