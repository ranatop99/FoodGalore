DROP TABLE USERS cascade constraints;
CREATE TABLE USERS (
    USER_ID NUMBER(24) PRIMARY KEY NOT NULL,
    USER_NAME VARCHAR2(255) NOT NULL,
    USER_EMAIL  VARCHAR2(255) NOT NULL,
    USER_GENDER  VARCHAR2(255),
    DOB DATE,
    USER_ADDRESS VARCHAR2(255) NOT NULL,
    USER_PHONENO  VARCHAR2(255) NOT NULL,
    USER_PASSWORD VARCHAR2(255) NOT NULL,
    CODE VARCHAR2(255) NOT NULL,
    USER_STATUS VARCHAR2(255) NOT NULL,
    USER_TYPE VARCHAR2(255) NOT NULL,
    PERMISSIONS VARCHAR2(255)
);


DROP TABLE SHOP cascade constraints;
CREATE TABLE SHOP (
    SHOP_ID NUMBER(10) PRIMARY KEY, 
    USER_ID NUMBER REFERENCES USERS(USER_ID),
	SHOP_NAME VARCHAR2(255) NOT NULL,  
	SHOP_IMAGE VARCHAR2(255) 

);

DROP TABLE PRODUCTS cascade constraints;
CREATE TABLE PRODUCTS(
     PRODUCT_ID NUMBER(10) PRIMARY KEY NOT NULL, 
	 PRODUCT_NAME VARCHAR2(255) NOT NULL, 
	 PRODUCT_PRICE  NUMBER(10) NOT NULL, 
	 PRODUCT_PICTURE VARCHAR2(255) NOT NULL, 
	 PRODUCT_DESCRIPTION VARCHAR2(1000) NOT NULL, 
     SHOP_ID NUMBER(10) REFERENCES SHOP(SHOP_ID), 
	 STATUS VARCHAR2(255), 
	 PRODUCT_STOCK NUMBER(10), 
	 MIN_ORDER NUMBER(10), 
	 MAX_ORDER NUMBER(10), 
	 ALLERGY VARCHAR2(1000),
     DISCOUNT NUMBER
        
    
    );


DROP TABLE REVIEW cascade constraints;
CREATE TABLE REVIEW(
     REVIEW_ID NUMBER(10) PRIMARY KEY NOT NULL,
     PRODUCT_ID NUMBER(10) REFERENCES PRODUCTS(PRODUCT_ID),
     USER_ID NUMBER(24) REFERENCES USERS(USER_ID), 
     REVIEW VARCHAR2(255) NOT NULL,
     RATING NUMBER(24)
         
);

DROP TABLE ORDERS cascade constraints;
CREATE TABLE ORDERS(
    ORDER_ID NUMBER(10) PRIMARY KEY NOT NULL,
    USER_ID NUMBER(24) REFERENCES USERS(USER_ID),
    ORDER_DATE DATE,
    ADMIN VARCHAR2(255)

);


DROP TABLE ORDER_DETAILS cascade constraints;
CREATE TABLE ORDER_DETAILS(
    ORDER_ID NUMBER(10) REFERENCES ORDERS(ORDER_ID), 
    PRODUCT_ID NUMBER(10) REFERENCES PRODUCTS(PRODUCT_ID),
    QUANTITY   NUMBER(10)

);



DROP TABLE CART cascade constraints; 
CREATE TABLE CART(
    CART_ID NUMBER PRIMARY KEY NOT NULL,
    USER_ID NUMBER(24) REFERENCES USERS(USER_ID)
);




DROP TABLE CART_DETAILS cascade constraints; 
CREATE TABLE CART_DETAILS(
    CART_ID NUMBER REFERENCES CART(CART_ID),
    PRODUCT_ID NUMBER(10) REFERENCES PRODUCTS(PRODUCT_ID),
    QUANTITY NUMBER

);



DROP TABLE COLLECTIONSLOT cascade constraints;
CREATE TABLE COLLECTIONSLOT(
    SLOT_ID NUMBER PRIMARY KEY NOT NULL,
    COLLECTION_DAY VARCHAR2(255) NOT NULL,
    COLLECTION_SLOT VARCHAR2(255),
    USER_ID NUMBER(24) REFERENCES USERS(USER_ID)   


);

DROP TABLE DISCOUNT cascade constraints;
CREATE TABLE DISCOUNT(
     DISCOUNT_ID NUMBER(10) PRIMARY KEY NOT NULL,
     DISCOUNT NUMBER

);

DROP TABLE PAYMENT cascade constraints;
CREATE TABLE PAYMENT(
    PAYMENT_ID NUMBER(10) PRIMARY KEY,
    USER_ID NUMBER(24) REFERENCES USERS(USER_ID),
    TOTAL_AMOUNT NUMBER,
    ORDER_ID NUMBER(10) REFERENCES ORDERS(ORDER_ID),
    PAYMENT_DATE DATE
);

DROP TABLE CONTACT cascade constraints;
CREATE TABLE CONTACT(
    MESSAGE_ID NUMBER(24) PRIMARY KEY NOT NULL,
    EMAIL VARCHAR2(255),
    MESSAGE VARCHAR2(255)

);