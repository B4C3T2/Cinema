# Cinema

Trello link: https://trello.com/b/Se7Zy4Gu/afphyperteam

Use case code:
@startuml
actor Guest

rectangle Cinema-system {

Guest -- (query)
(query) <|-- (query free slots) 
(query) <|-- (query for qenerating invoice)

(query free slots) <.. (book slots) : <<extend>>


Guest-- (delete it's own booking)
(delete it's own booking) <|-- (delete future booking)
(delete it's own booking) <|-- (stop current booking)

}
@enduml