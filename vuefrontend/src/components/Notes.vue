<template>
  <div class="tc-notes-wrapper">
    <add-new-button/>
    <div class="tc-notes">
      <note v-for="(note, index) in notes" :key="index" :note="note"/>
    </div>
  </div>
</template>

<script>
  import AddNewButton from "./AddNewButton";
  import Note from "./Note";
  export default {
    name: "Notes",
    components: {Note, AddNewButton},
    data() {
      return {
        notes: [ 
          {
            title: 'sunt aut facere repellat',
            body: 'uia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto'
          },
          {
            title: 'qui est esse',
            body: 'est rerum tempore vitae<br>nsequi sint nihil reprehenderit dolor beatae ea dolores neque <br>fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis<br>qui aperiam non debitis possimus qui neque nisi nulla'
          },
          {
            title: 'nesciunt quas odio',
            body: 'repudiandae veniam quaerat sunt sed alias aut fugiat sit autem sed est'
          },
          {
            title: 'This is a demo note',
            body: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi corrupti officiis alias tenetur, tenetur iste maxime laudantium?'
          },
          {
            title: 'qui est esse',
            body: 'est rerum tempore vitae<br>nsequi sint nihil reprehenderit dolor beatae ea dolores neque <br>fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis<br>qui aperiam non debitis possimus qui neque nisi nulla'
          },
        ]
      }
    }
  }
</script>

<style lang="scss" scoped>
.tc-notes-wrapper {
  .new-note-btn {
    width: 200px;
    display: block;
    margin: 0 auto 20px;
    background-color: #FFF;
    padding: 10px 32px;
    border: 1px solid #e0e0e0;
    font-size: 26px;
    outline: 0;
    transition: all 0.3s;
    cursor: pointer;
    font-family: 'Caveat', cursive;

    &:hover {
      box-shadow: 0 5px 7px rgba(0, 0, 0, 0.1);
    }

    &:active {
      position: relative;
      top: 1px;
    }
  }

  .tc-notes {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: 0 auto;

    .tc-note {
      background-color: #f0c806;
      border-radius: 8px;
      width: 280px;
      margin: 0 10px 20px;
      box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.2);
      transition: all 0.5s;
      cursor: pointer;
      font-family: 'Caveat', cursive;

      .tc-note-header {
        padding: 10px 16px 0;

        .tc-note-close {
          display: inline-block;
          width: 24px;
          height: 24px;
          border-radius: 50%;
          line-height: 24px;
          text-align: center;
          transition: all 0.3s;

          &:hover {
            background-color: rgba(0, 0, 0, 0.2);
          }

          &:focus {
            box-shadow: inset 2px 3px 0px rgba(0, 0, 0, 0.8);
          }
        }

        .tc-note-close {
          float: right;
        }
      }

      .tc-note-title,
      .tc-note-body {
        outline: 0;
      }

      .tc-note-title {
        font-size: 24px;
        padding: 10px 16px;
        font-weight: bold;
      }

      .tc-note-body {
        font-size: 20px;
        padding: 10px 16px 16px;
      }

      &:hover {
        box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.3);
      }
    }
  }
}
</style>