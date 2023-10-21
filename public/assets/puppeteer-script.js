const puppeteer = require('puppeteer');

const url = process.argv[2]; // URL passed as a command line argument

(async () => {
  const browser = await puppeteer.launch({
    args: ['--no-sandbox', '--disable-setuid-sandbox'],
  });
  const page = await browser.newPage();

  await page.goto(url, { waitUntil: 'domcontentloaded' });
  const html = await page.content();
    const fs = require('fs');
    fs.writeFileSync('page.html', html);
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
