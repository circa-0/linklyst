# LINKLYST
A simple self hosted HTML/PHP/CSS template for listing links to social media or other sites similar to LinkTree, Tap.bio, Lnk.bio, bio.fm, Shorby, etc. Basically a simple static page with nice looking button links.
---
![https://linklyst.io/fb.jpg](https://linklyst.io/fb.jpg)
![https://linklyst.io/example.jpg](https://linklyst.io/example.jpg)
---
# DEMO 1: [linklyst.io](https://linklyst.io)
# DEMO 2: [amongthenoise.com/links](https://amongthenoise.com/links)
# DEMO 3: [daviddeputy.com](https://daviddeputy.com)
# Usage
Simply upload the files to your website root or whatever folder you want. Files are currently referenced relatively. Comments are throughout the index.php and style.css guiding you on what to change. It's all super simple HTML, so should be easy. The only PHP called is for the OG tags in the header, to point to the domain URL that the page is being run on. This is because OG tags need absolute values to work properly, and this makes it so you shouldn't have to replace those.

Please make sure to change all info in the OG tags marked, as well as any mention of Linklyst. You want to put your name, your company name, brand name, etc.

The logo on the page is hidden by default since most people don't have a logo, but you can simply uncomment the div to restore it.

Make sure to replace the logo, background, favicon, and fb.jpg images with your own.

# Colors
I used variables for the colors to make it easy for you to change up the colors to how you want. The variables are set at the top of the style.css in :root
```
:root {
	--primaryColor: #7CE5F2;
	--secondaryColor: #444851;
	--buttonColor: rgba(255, 255, 255, 0.2);
	--linkColor: #ecedef;
	--nameColor: #7CE5F2;
}
```

# Background
The background is default to just a color, however you can uncomment the second background line in the html element in style.css to have a background image. I recommend an image around 1920 x 985 minimum, like the example.
```
html {
	background: var(--secondaryColor);
	background: linear-gradient(rgba(39, 40, 45, 0.9), rgba(15, 15, 16, 0.9)), url("/bg.jpg") fixed center center; <--- Uncomment this line to use a background image
	background-size: cover;
}
```

# License
Feel free to use as you like, edit to your needs, I just request credit is given somewhere in your footer or at the very least in a comment in your HTML. I posted this for people to use freely, but acknowledgement is cool too.
