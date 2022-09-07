# Turpentine Issue Fix.
- Fixed **F.R.I (First Request Issue)** of Magento Turpentine Extension
- Issue Reference
	- https://medium.com/@wegrzynowiczk/fixing-slow-first-page-request-with-turpentine-and-varnish-d06970e95e04
- Important !
	- Do comment out manually **176 line** in version-4.vcl on Magento Turpentine
	- app/code/community/Nexcessnet/Turpentine/misc/version-4.vcl
	- ![patch](https://i.ibb.co/WPYzwZ2/2022-09-07-21-31-30.png)