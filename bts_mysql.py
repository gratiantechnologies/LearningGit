from bs4 import BeautifulSoup
import requests,mysql.connector

mydb = mysql.connector.connect(
        host = "localhost",
        user = "root",
        password = "ixl@990PMv",   
        database = "books_to_scrape"
)
cursor = mydb.cursor()

url = input("Enter the url to scrape: ")
details_of_book = {}
try:
    cursor.execute("CREATE DATABASE books_to_scrape")
except mysql.connector.errors.DatabaseError:
    print("Database books_to_scrape already exists")
cursor.execute("DROP TABLE IF EXISTS Books")
#cursor.execute('''CREATE DATABASE books_to_scrape''')
cursor.execute("CREATE TABLE Books(id INTEGER AUTO_INCREMENT PRIMARY KEY, title VARCHAR(255), price VARCHAR(10), stock VARCHAR(100), rating INTEGER(10) )")

def books_to_scrape(url_update):
    
    sno = 0
    while not url_update.endswith("#"):
        try:
            response = requests.get(url_update)    #getting the response from url
        except requests.exceptions.ConnectionError:
            print("please check internet connection")
            break
        except:
            print("please check the URL entered.")
            break
        #raise an error if url is not found 
        else:
            if response.raise_for_status():
                print("Please check the url")
                break
        print("Opening the site books to scrape")
        soup = BeautifulSoup(response.text,"html.parser")    #parsing the website
        books = soup.find_all("li",{"class":"col-xs-6"})     #will return a list of all the books in the page

        
        for book in books:                                   #sorting through each book
            sno += 1
            print(sno)
            title = book.find("h3").text
            print(title)
            price = book.find("p",{"class":"price_color"}).text
            print(price)
            stock = book.find("p",{"class":"availability"}).text.strip()
            print(stock)
            if book.find("p",{"class":"star-rating One"}):
                rating = "1"
            if book.find("p",{"class":"star-rating Two"}):
                rating = "2"

            elif book.find("p",{"class":"star-rating Three"}):
                rating = "3"
            
            elif book.find("p",{"class":"star-rating Four"}):
                rating = "4"
            
            elif book.find("p",{"class":"star-rating Five"}):
                rating = "5"
            
            print(rating)

            
            cursor.execute("INSERT INTO Books(title,price,stock,rating) VALUES(%s,%s,%s,%s)",(title,price,stock,rating))
            mydb.commit()

        try:
            next_page = soup.find("li",{"class":"next"})
            page_link = next_page.find("a").get("href")        #getting url of next page
        except:
            print("Completed")
            break      

        try:
            if sno ==20:
                url_update = "http://books.toscrape.com/"+page_link
                
            else:
                url_update = "http://books.toscrape.com/catalogue/"+page_link   #updating the url of next page
        except :
            print("Completed")
            mydb.close()
            break   

books_to_scrape(url)
