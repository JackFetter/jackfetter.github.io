import os
import sys

try:
    from PyPDF2 import PdfFileMerger
except: # if PyPDF2 is not installed...
    print("\nPlease install 'PyPDF2' using 'pip install PyPDF2'. PDF Assistant will now end.\n")
    sys.exit()  # end the program.

if sys.platform == "darwin": # if using a Mac...
  os.system('clear') # wipe the console.
elif sys.platform == "win32": # if using a 32-bit Windows PC...
  os.system('cls') # clear the command prompt.
elif sys.platform == "win64": # if using a 32-bit Windows PC...
  os.system('cls') # clear the command prompt.
elif sys.platform == "linux" or sys.platform == "linux2": # if using a Linux machine (unlikely)...
  os.system('clear') # clear the terminal.

print("""       ________________
      /               /
     /_____      ____/
          /     /  
 .+oooo++/     /         PDF
 /oooooo/     /          Assistant
 -ooooo/     /:`         
  -ooo/     /oo+-        Developed by
   .o/_____/ooooo/       Jack Fetter
    .ooooooooooooo:      
       `:+ooooooooo/ 
          `--:/++++:` 
          """)

file_list = {} # list of all files in current directory
output_list = [] # list of files which will be merged
month  = ['24','36'] # will print 24/36 month when asking for files
a = 1 # iterate file choice list
i = 0 # iterate month printing

for file in os.listdir("./"): # for files in our current directory...
    if file.endswith(".pdf"): # search for PDF files...
        file_list[a] = file # and sort the files into an indexed dict.

        a+=1 # iterate the dict index

if not file_list: # if no PDF files were found...
  print(" ---\n\nWe couldn't find any PDF files.\nPDF Helper will now end.\n")
  sys.exit() # end the program.

if len(file_list) < 2:
  print(" ---\n\nThere's only one PDF file in your current directory ({}).\nWe can't help you merge two files if there's only one present.\nPDF Helper will now end.\n".format(file_list[1]))
  sys.exit() # end the program.
else:
  pass # at least two PDF files are in the current directory

path = sys.path[0] # get current directory path
print(" ---\n\nWe've found these PDF files in {}:\n".format(path))

for index, file_name in file_list.items(): # get index and name of file...
    a = "[{}] {}".format(index, file_name) # gather these in a variable...
    print("  ",a) # and print them with a bit of whitespace.

while i != 2: # iterate twice
  try:
    choice = int(input("\nPlease enter the number that's next to\nthe {}-month SPP document you want to open: ".format(month[0])))
    output_list.append(file_list[choice]) # append file choice to output list
    i += 1 # iterate up
    month.pop(0) # remove the current value (24)
  except:
    print("\n ---\n\nPlease open the program again and enter a valid number.\nPDF Helper will now end.\n") # invalid input detected
    sys.exit() # end the program
    pass

file_name = input("\nWhat would you like the file name to be? ")

merger = PdfFileMerger(strict=False) # don't print error messages
for pdf in output_list:
    merger.append(pdf) # append each file into a single single variable
merger.write('{}.pdf'.format(file_name)) # write to a file with the requested name
merger.close() # close the connection

r = input("\nWould you like to remove the source files? ").lower()
if r == "y" or r == "yes":
    os.remove(str({}).format(output_list[0]))
    os.remove(str({}).format(output_list[1])) # remove input files based on initial dict list
else:
    pass

print("\n ---\n\n{}.pdf has been saved to {}!".format(file_name,path))
if sys.platform == "darwin" or sys.platform == "linux" or sys.platform == "linux2": # always ensure line break before return to console for aesthetic reasons
  print("")
