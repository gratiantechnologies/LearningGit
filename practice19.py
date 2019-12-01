from bs4 import BeautifulSoup
import requests,pandas
url = "http://books.toscrape.com/index.html"
details_of_book = {}

def books_to_scrape(url_update):

    sno = 0
    while not url_update.endswith("#"):
        response = requests.get(url_update)    #getting the response from url
        #raise an error if url is not found 
        if response.raise_for_status():
            print("Please check the url")
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
            stock = book.find("p",{"class":"availability"}).text.lstrip().rstrip()
            print(stock)
            if book.find("p",{"class":"star-rating One"}):
                rating = "*"
            if book.find("p",{"class":"star-rating Two"}):
                rating = "* *"

            elif book.find("p",{"class":"star-rating Three"}):
                rating = "* * *"
            
            elif book.find("p",{"class":"star-rating Four"}):
                rating = "* * * *"
            
            elif book.find("p",{"class":"star-rating Five"}):
                rating = "* * * * *"
            
            print(rating)
            details_of_book[sno] = [title,price,rating,stock]  #adding all the details of book into a dictionary
            file_format = pandas.DataFrame.from_dict(details_of_book,orient="index",columns = ["Title","Price","Rating","Stock"])                                          #converting the dictionary into row of a file 
            file_format.to_csv("books_to_scarpe.csv")          #saving the file
        try:
            next_page = soup.find("li",{"class":"next"})
            page_link = next_page.find("a").get("href")        #getting url of next page
        except:
            print("Completed")
            break                                              #if url of next page is not found it indicates 
                                                               #last page is encountered so break the loop
        try:
            if sno ==20:
                url_update = "http://books.toscrape.com/"+page_link
                
            else:
                url_update = "http://books.toscrape.com/catalogue/"+page_link   #updating the url of next page
                
                
        except :
            print("Completed")
            break

books_to_scrape(url)
